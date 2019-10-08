<?php
/**
 * Copyright (c) 2019 McGraw-Hill Education <http://mheducation.com>.
 *
 * All rights reserved, unless this code has already been open-sourced elsewhere.
 */

declare(strict_types=1);

namespace Asheliahut\Mock;

use Closure;
use Illuminate\Contracts\Foundation\Application;

class MockLaravelApp implements Application
{

    public function loadDeferredProviders () {}

    public function version() {}

    public function basePath($path = '') {}

    public function bootstrapPath($path = '') {}

    public function configPath($path = '') {}

    public function databasePath($path = '') {}

    public function environmentPath(){}

    public function resourcePath($path = '') {}

    public function storagePath(){}

    public function environment(...$environments) {}

    public function runningInConsole(){}

    public function runningUnitTests(){}

    public function isDownForMaintenance(){}

    public function registerConfiguredProviders(){}

    public function register($provider, $force = false) {}

    public function registerDeferredProvider($provider, $service = null) {}

    public function resolveProvider($provider) {}

    public function boot(){}

    public function booting($callback) {}

    public function booted($callback) {}

    public function bootstrapWith(array $bootstrappers) {}

    public function configurationIsCached(){}

    public function detectEnvironment(Closure $callback) {}

    public function environmentFile(){}

    public function environmentFilePath(){}

    public function getCachedConfigPath(){}

    public function getCachedServicesPath(){}

    public function getCachedPackagesPath(){}

    public function getCachedRoutesPath(){}

    public function getLocale(){}

    public function getNamespace(){}

    public function getProviders($provider) {}

    public function hasBeenBootstrapped(){}

    public function loadEnvironmentFrom($file) {}

    public function routesAreCached(){}

    public function setLocale($locale) {}

    public function shouldSkipMiddleware(){}

    public function terminate(){}

    public function bound($abstract) {}

    public function alias($abstract, $alias) {}

    public function tag($abstracts, $tags) {}

    public function tagged($tag) {}

    public function bind($abstract, $concrete = null, $shared = false) {}

    public function bindIf($abstract, $concrete = null, $shared = false) {}

    public function singleton($abstract, $concrete = null) {}

    public function singletonIf($abstract, $concrete = null) {}

    public function extend($abstract, Closure $closure) {}

    public function instance($abstract, $instance) {}

    public function addContextualBinding($concrete, $abstract, $implementation) {}

    public function when($concrete) {}

    public function factory($abstract) {}

    public function flush(){}

    public function make($abstract, array $parameters = []) {}

    public function call($callback, array $parameters = [], $defaultMethod = null) {}

    public function resolved($abstract) {}

    public function resolving($abstract, Closure $callback = null) {}

    public function afterResolving($abstract, Closure $callback = null) {}

    public function get($id) {}

    public function has($id) {}
}

