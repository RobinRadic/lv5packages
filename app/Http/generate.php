<?php

Route::get('laradic/debug/debugbar/javascript.js', 'DebugBarAssetController@js');
Route::get('laradic/debug/debugbar/stylesheet.css', 'DebugBarAssetController@css');

function ignoreit($errno, $errstr, $error_file, $error_line)
{
}

set_error_handler("ignoreit");
Route::get('ccc', function ()
{
    ;
    # $aliases = App::getInstance();
    #var_dump(App::getLoadedProviders());
    #  Debugger::dump(app($name));

    # return;

    $done = [];
    foreach (App::getBindings() as $name => $data)
    {
        #  echo $name . '<br>'; continue;
        if ( in_array($name, ['filesystem.cloud']) or stristr($name, '.') or stristr($name, '\\') )
        {
            continue;
        }
        try
        {
            if ( in_array($name, $done) )
            {
                continue;
            }
            echo '/** @var \\' . get_class(app($name)) . ' */ <br>';
            echo 'public $' . $name . ';<br><br>';
            # Debugger::dump($name);
            # Debugger::dump(get_class(app($name)));
        } catch (ErrorException $e)
        {
        }
    }


    echo '<br><br>$var = [<br>';
    foreach (App::getBindings() as $name => $data)
    {
        #  echo $name . '<br>'; continue;
        if ( in_array($name, ['filesystem.cloud']) )
        {
            continue;
        }
        try
        {
            echo "'" . $name . "' => '" . get_class(app($name)) . "',<br>";
            # Debugger::dump($name);
            # Debugger::dump(get_class(app($name)));
        } catch (ErrorException $e)
        {
        }
    }

    echo '<br>]';
});


function whatasdfasdf()
{

    function ignoreit($errno, $errstr, $error_file, $error_line)
    {
    }

    set_error_handler("ignoreit");
    Route::get('ccc', function ()
    {
        ;
        # $aliases = App::getInstance();
        #var_dump(App::getLoadedProviders());
        #  Debugger::dump(app($name));

        # return;

        $done = [];
        foreach (App::getBindings() as $name => $data)
        {
            #  echo $name . '<br>'; continue;
            if ( in_array($name, ['filesystem.cloud']) or stristr($name, '.') or stristr($name, '\\') )
            {
                continue;
            }
            try
            {
                if ( in_array($name, $done) )
                {
                    continue;
                }
                echo '/** @var \\' . get_class(app($name)) . ' */ <br>';
                echo 'public $' . $name . ';<br><br>';
                # Debugger::dump($name);
                # Debugger::dump(get_class(app($name)));
            } catch (ErrorException $e)
            {
            }
        }


        echo '<br><br>$var = [<br>';
        foreach (App::getBindings() as $name => $data)
        {
            #  echo $name . '<br>'; continue;
            if ( in_array($name, ['filesystem.cloud']) )
            {
                continue;
            }
            try
            {
                echo "'" . $name . "' => '" . get_class(app($name)) . "',<br>";
                # Debugger::dump($name);
                # Debugger::dump(get_class(app($name)));
            } catch (ErrorException $e)
            {
            }
        }

        echo '<br>]';
    });
}
