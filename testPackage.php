<?php
$classPath = 'Radic\BladeExtensions\Compilers\TestCompiler';
require_once __DIR__ . '/workbench/laradic/dev/resources/stub/Booter.php';
$tempdir = __DIR__ . '/_test';
/** @var \Illuminate\Foundation\Application $app */
$app     = Booter::create(__DIR__, $tempdir);

$isDebug = $app->make('config')->get('app.debug') ? 'yes' : 'no';


$str=<<<'EOT'
Hello {{ "asdf" }} is debug: {{ $isDebug }}
Ik verwacht de volgende dingen:
- Geld
- Doekoe
- Swag
- Swekkies

En veel dope voor me homies. Even testen of ze represent zijn!
@if($homie1 === 'here')
- Homie 1 is here
@endif
@if($homie2 === 'daar')
- Homie 2 is daar
@else
- Homie 2 is niet hier man
@endif

En nu de homies  even wat werk laten doen hoor!
@for($i = 0; $i < 20; $i++)
- Homie is nu {{ $i }} stap van je verwijderd
@endfor

Done !
EOT;

$b = app('blade.string');

for($i = 0; $i < 1000; $i++)
{
    $b->render($str, [ 'isDebug' => app('config')->get('app.debug') ]);
}

xdebug_start_trace();
