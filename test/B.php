<?php
namespace test;

class B {
	public static function foo() {
		return \ test\C::foo();
	}
}
