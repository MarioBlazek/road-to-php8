<?php

#[Attribute]
class MyFirstAttribute
{
    public function __construct(
        public string $myArgument
    )
    {}
}