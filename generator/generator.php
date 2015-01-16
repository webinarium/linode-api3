<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015 Artem Rodygin
//
//  This file is part of Linode API Client Library for PHP.
//
//  You should have received a copy of the GNU General Public License
//  along with the library. If not, see <http://www.gnu.org/licenses/>.
//
//----------------------------------------------------------------------

$vocabulary = array(

    // reservered words
    'clone'                  => 'duplicate',
    'echo'                   => 'test',
    'list'                   => 'getList',

    // classes
    'nodebalancer'           => 'NodeBalancer',
    'stackscript'            => 'StackScript',

    // methods
    'addprivate'             => 'addPrivate',
    'addpublic'              => 'addPublic',
    'createfromdistribution' => 'createFromDistribution',
    'createfromimage'        => 'createFromImage',
    'createfromstackscript'  => 'createFromStackScript',
    'datacenters'            => 'dataCenters',
    'estimateinvoice'        => 'estimateInvoice',
    'getapikey'              => 'getApiKey',
    'linodeplans'            => 'linodePlans',
    'nodebalancers'          => 'nodeBalancers',
    'paybalance'             => 'payBalance',
    'setrdns'                => 'setReverseDNS',
    'stackscripts'           => 'stackScripts',
    'updatecard'             => 'updateCard',
    'webconsoletoken'        => 'webConsoleToken',
);

// Get API specification.

$json = file_get_contents('https://api.linode.com/?api_action=api.spec');

$api = json_decode($json, true);
$api = $api['DATA'];

$version = $api['VERSION'];

// Get list of methods.

$classes = array();

// Convert "linode.disk.createfromstackscript" names to "Linode.Disk.createFromStackScript" ones.

foreach (array_keys($api['METHODS']) as $entry) {

    if ($entry == 'test.echo') {
        continue;
    }

    $parts = explode('.', $entry);

    $method = array_pop($parts);

    if (array_key_exists($method, $vocabulary)) {
        $method = $vocabulary[$method];
    }

    foreach ($parts as $key => $value) {

        if (array_key_exists($value, $vocabulary)) {
            $value = $vocabulary[$value];
        }

        $parts[$key] = ucfirst($value);
    }

    $class = implode('.', $parts);

    if (!array_key_exists($class, $classes)) {
        $classes[$class] = array();
    }

    $classes[$class][$method] = $api['METHODS'][$entry];
    $classes[$class][$method]['ACTION'] = $entry;
}

// Generated classes.

$template = file_get_contents(__DIR__ . '/template.txt');

foreach ($classes as $class => $methods) {

    ksort($methods);

    $php = null;

    foreach ($methods as $method => $meta) {

        $strlen = 0;

        $args = array();

        $pad_null = false;

        $lines = array();

        $description = explode("\n", str_replace('. ', ".\n", $meta['DESCRIPTION']));

        $lines[] = "/**";

        foreach ($description as $line) {
            $line = trim($line);
            $lines[] = " * {$line}";
        }

        $lines[] = " * ";

        if (count($meta['PARAMETERS'])) {

            foreach ($meta['PARAMETERS'] as $key => $value) {
                $strlen = max($strlen, strlen($key));
            }

            foreach ($meta['PARAMETERS'] as $key => $value) {

                if ($value['TYPE'] == 'numeric') {
                    $value['TYPE'] = 'integer';
                }

                $name = $value['NAME'];
                $type = str_pad($value['TYPE'], 7, ' ', STR_PAD_RIGHT);

                if ($value['REQUIRED']) {
                    $required = 'required';
                }
                else {
                    $required = 'optional';
                    $pad_null = true;
                }

                $args[] = "\${$name}" . ($pad_null ? " = null" : null);

                $line  = " * @param   {$type} \$" . str_pad($name, $strlen + 1, ' ', STR_PAD_RIGHT);
                $line .= "[{$required}] {$value['DESCRIPTION']}";

                $lines[] = $line;
            }

            $lines[] = " * ";
        }

        $args = implode(', ', $args);

        $lines[] = " * @return  array";
        $lines[] = " */";
        $lines[] = "public function {$method}({$args})";
        $lines[] = "{";

        if (count($meta['PARAMETERS'])) {

            $lines[] = "    return \$this->call('{$meta['ACTION']}', array(";

            foreach ($meta['PARAMETERS'] as $key => $value) {
                $name = str_pad("'{$key}'", $strlen + 2, ' ', STR_PAD_RIGHT);
                $lines[] = "        {$name} => \${$key},";
            }

            $lines[] = "    ));";
        }
        else {
            $lines[] = "    return \$this->call('{$meta['ACTION']}');";
        }

        $lines[] = "}";

        foreach ($lines as $key => $line) {
            $lines[$key] = rtrim($line);
        }

        $php .= "\n    " . implode("\n    ", $lines) . "\n";
    }

    $class     = explode('.' , 'Linode.' . $class);
    $classname = array_pop($class);
    $namespace = implode('\\', $class);

    $dir = str_replace('\\', '/', $namespace);
    $dir = substr($dir, 6);

    $php = sprintf($template, $namespace, $version, $classname, '    ' . ltrim($php));

    if (!file_exists("src{$dir}")) {
        mkdir("src{$dir}");
    }

    file_put_contents("src{$dir}/{$classname}.php", $php);
}
