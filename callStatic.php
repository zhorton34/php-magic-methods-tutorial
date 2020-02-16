<?php

class Team
{
    public static function __callStatic($method, $parameters)
    {
        var_dump($method, $parameters);
    }
}

Team::nonDefinedStaticFunctionOnTeamClass('parameterOne', 'parameterTwo', 'parameterThree');
