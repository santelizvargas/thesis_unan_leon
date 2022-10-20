<?php

interface Repository
{
    function get(): array;
    function create(): array;
}