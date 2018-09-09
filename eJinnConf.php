<?php

return [
    "author"        => "ArtisticPhoenix",
    "description"   => "Exception handler",
    "package"       => "Evo",
    "buildpath"     => __DIR__.'/src/',
    "support"       => "https://github.com/ArtisticPhoenix/{project}/issues",
    "version"       => "1.0.0",
    "_reserved"       => [
        1,
        2,
        [8,20]
    ],
    "namespaces"     => [  
        "evo\\exception"  => [
            "subpackage"    => "Evo",
            "buildpath"     =>  ["psr"=>4],
            "interfaces"    => [
                "EvoExceptionInterface"
            ],
            "implements" => ["EvoExceptionInterface"],
            "exceptions" => [
                //general errors 1000-2000
                "1000"  => "InvalidArgument",
                //shutdown errors 2000-3000
                "2000"   => [
                    "name"      => "ShutdownError",
                    "extends"   => "\ErrorException"
                 ],
                "2001"   => [
                    "name"      => "RuntimeError",
                    "extends"   => "\ErrorException"
                ],
            ]
        ]
    ]
];

