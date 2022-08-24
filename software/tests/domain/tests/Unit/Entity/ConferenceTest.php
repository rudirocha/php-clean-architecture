<?php
use \PhpCleanArchitecture\Domain\Entity\Conference;

beforeEach(function() {
    $this->conference = new Conference('city 1', 1,2022, 'theSlug');
});

it("tests getCity()", function() {
    $expectedCity = 'city 1';
    expect($this->conference->getCity())->toBe($expectedCity);
});

it('tests setCity()', function() {
    $expectedCity = 'city 2';
    $this->conference->setCity('city 2');
    expect($this->conference->getCity())->toBe($expectedCity);
});

it("tests getSlug()", function() {
    $expectedSlug = 'theSlug';
    expect($this->conference->getSlug())->toBe($expectedSlug);
});

it('tests setSlug()', function() {
    $expectedSlug = 'slug 2';
    $this->conference->setSlug('slug 2');
    expect($this->conference->getSlug())->toBe($expectedSlug);
});

it('tests getMonth()', function () {
    expect($this->conference->getMonth())->toBe(1);
});

it('tests setMonth()', function() {
    $this->conference->setMonth(2);
    expect($this->conference->getMonth())->toBe(2);
});

it('tests getYear()', function () {
    expect($this->conference->getYear())->toBe(2022);
});

it('tests setYear()', function() {
    $this->conference->setYear(2023);
    expect($this->conference->getYear())->toBe(2023);
});

it('tests setYear() with Invalid argument', function() {
    $this->conference->setYear(10000);
})->throws(InvalidArgumentException::class, 'Invalid year [10000]. Value must be less than 9999.');