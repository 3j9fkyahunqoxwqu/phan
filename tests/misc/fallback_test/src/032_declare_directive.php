<?php declare(strict_types=1)
class C89 {
    function __toString() { return 'str'; }
}
$v = strlen(new C89);
