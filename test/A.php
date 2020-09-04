<?php
namespace test;

class A {
	public static function foo() {
		return \test\B::foo();
	}
}
