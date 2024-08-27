<?php
// http://localhost/evo/ejinn?config=C:\UniserverZ\www\evo\Exception\eJinnConf.php
return [
    "author"        => "ArtisticPhoenix",
    "description"   => "Exception handler",
    "package"       => "Evo",
    "buildpath"     => __DIR__.'/src/',
    "support"       => "https://github.com/ArtisticPhoenix/{project}/issues",
    "version"       => "1.0.0",
    "_reserved"       => [
        [1,1000] //some of these will be used in the future
    ],
    "namespaces"     => [  
        "evo\\exception"  => [
            "subpackage"    => "Evo",
            "buildpath"     =>  ["psr"=>4],
            "interfaces"    => [
                "EvoExceptionInterface"
            ],
            "implements" => ["\\evo\\exception\\EvoExceptionInterface"],
            "exceptions" => [
				"0"     => "Exception",             //Exception thrown for an unknown or unexpected error
                "5"     => "NotImplemented",        //Exception thrown when the functionality is not fully implemented ( useful for development )
                "10"       => [
                    //Exception thrown instead of an error.
					"name"      => "ShutdownError",
                    "extends"   => "ErrorException"
                ],
                "15"   => [
                    "name"      => "RuntimeError",
                    "extends"   => "RuntimeException"
                ],
				
				//400 block Http Client Errors	 
				//"400"	=> "Http400BadRequest",
				//"401"	=> "Http401Unauthorized",
				//"402"	=> "Http402PaymentRequired",
				//"403"	=> "Http403Forbidden",
				//"404"	=> "Http404NotFound",
				//"405"	=> "Http405MethodNotAllowed",
				//"406"	=> "Http406NotAcceptable",
				//"407"	=> "Http407ProxyAuthenticationRequired",
				//"408"	=> "Http408RequestTimeout",
				//"409"	=> "Http409Conflict",
				//"410"	=> "Http410Gone",
				//"411"	=> "Http411LengthRequired",
				//"412"	=> "Http412PreconditionFailed",
				//"413"	=> "Http413PayloadTooLarge",
				//"414"	=> "Http414URITooLong",
				//"415"	=> "Http415UnsupportedMediaType",
				//"416"	=> "Http416RangeNotSatisfiable",
				//"417"	=> "Http417ExpectationFailed",
				//"418"	=> "Http418Teapot",
				//"421"	=> "Http421MisdirectedRequest",
				//"422"	=> "Http422UnprocessableEntity",
				//"423"	=> "Http423Locked",
				//"424"	=> "Http424FailedDependency",
				//"425"	=> "Http425TooEarly",
				//"426"	=> "Http426UpgradeRequired",
				//"428"	=> "Http428PreconditionRequired",
				//"429"	=> "Http429TooManyRequests",
				//"431"	=> "Http431RequestHeaderFieldsTooLarge",
				//"451"	=> "Http451UnavailableForLegalReasons",
				//500 block Http Server Errors	 
				//"500"	=> "Http500InternalServerError",
				//"501"	=> "Http501NotImplemented",
				//"502"	=> "Http502BadGateway",
				//"503"	=> "Http503ServiceUnavailable",
				//"504"	=> "Http504GatewayTimeout",
				//"505"	=> "Http505HTTPVersionNotSupported",
				//"506"	=> "Http506VariantAlsoNegotiates",
				//"507"	=> "Http507InsufficientStorage",
				//"508"	=> "Http508LoopDetected",
				//"510"	=> "Http510NotExtended",
				//"511"	=> "Http511NetworkAuthenticationRequired",
				
				
				//900 block extend PHP default Exception class
                "900" => [ //Exception thrown if a callback refers to an undefined function or if some arguments are missing.
                    "name"      => "BadFunctionCallException",
                    "extends"   => "\\BadFunctionCallException"
                ],
                "905"       => [  //Exception thrown if a callback refers to an undefined method or if some arguments are missing.
                    "name"      => "BadMethodCallException",
                    "extends"   => "\\BadMethodCallException"
                ],
                "910"       => [  //Exception thrown if a value does not adhere to a defined valid data domain.
                    "name"      => "DomainException",
                    "extends"   => "\\DomainException"
                ],
                "915"       => [ //Exception thrown if an argument is not of the expected type.
                    "name"      => "InvalidArgumentException",
                    "extends"   => "\\InvalidArgumentException"
                ],
                "920"       => [  //Exception thrown if a length is invalid.
                    "name"      => "LengthException",
                    "extends"   => "\\LengthException"
                ],
                "925"       => [  //Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code
                    "name"      => "LogicException",
                    "extends"   => "\\LogicException"
                ],
                "930"       => [  //Exception thrown if a value is not a valid key. This represents errors that cannot be detected at compile time.
                    "name"      => "OutOfBoundsException",
                    "extends"   => "\\OutOfBoundsException"
                ],
                "935"       => [  //Exception thrown when an illegal index was requested. This represents errors that should be detected at compile time.
                    "name"      => "OutOfRangeException",
                    "extends"   => "\\OutOfRangeException"
                ],
                "940"       => [  //Exception thrown when adding an element to a full container.
                    "name"      => "OverflowException",
                    "extends"   => "\\OverflowException"
                ],
                "945"       => [  //Exception thrown to indicate range errors during program execution. Normally this means there was an arithmetic error other than under/overflow.
                    "name"      => "RangeException",
                    "extends"   => "\\RangeException"
                ],
                "950"       => [  //Exception thrown if an error which can only be found on runtime occurs.
                    "name"      => "RuntimeException",
                    "extends"   => "\\RuntimeException"
                ],
                "955"       => [  //Exception thrown when performing an invalid operation on an empty container, such as removing an element.
                    "name"      => "UnderflowException",
                    "extends"   => "\\UnderflowException"
                ],
                "960"       => [
                    //Exception thrown if a value does not match with a set of values.
                    // Typically, this happens when a function calls another function and expects the return value to be of a certain type or value not including arithmetic or buffer related errors
                    "name"      => "UnexpectedValueException",
                    "extends"   => "\\UnexpectedValueException"
                ],
                "965"       => [
                    //Exception thrown instead of an error.
                    "name"      => "Error",
                    "extends"   => "\\Error"
                ],"970"       => [
                    //Exception thrown instead of an error.
					"name"      => "ErrorException",
                    "extends"   => "\\ErrorException"
                ],
				
				//1000 block Generic errors
				
				
				//2000 block Config Errors
				
				"1001"  => "UnknownOption",
                "1002"  => "UnknownInterface",
                "1003"  => "UnknownClass",
                "1004"  => "UnknownKey",
                "1005"  => "ProcessLocked",
                "1006"  => "ParseError",
                "1007"  => "InvalidDataType",
                "1008"  => "MissingRequired",
                "1009"  => "ReservedKeyword",
                "10010" => "ReservedExceptionCode",
                "1011"  => "DuplicateExceptionCode",
                "1012"  => "ProcessLocked",
                "1013"  => "PathNotFound",
                "1014"  => "PathNotWritable",
                "1015"  => "CouldNotCreateFile",
                "1016"  => "InvalidConfigFile"
            ]
        ]
    ]
];