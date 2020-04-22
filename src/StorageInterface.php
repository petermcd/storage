<?php

namespace RockProfile\Storage;

use RockProfile\Package\Package;

/**
 * This interface must be implemented by a storage engine intended to be used.
 *
 * Interface StorageInterface
 * @package RockProfile\Storage
 */
interface StorageInterface{
    /**
     * Interface for adding a new package.
     *
     * @param string $id
     * @param Package $package
     * @return void
     */
    public function addRecord(string $record_id, Package $package):void ;

    /**
     * Interface for adding a relation between 2 packages.
     *
     * @param array $relation
     */
    public function addRelation(array $relation): void;

    /**
     * Interface to allow the run command. If records are added on the fly this should be an empty method
     */
    public function run():void;

    /**
     * Interface for retrieving dependencies. Expected behaviour, if no parameters passed all dependencies are returned
     * otherwise only paths to specified dependency are returned.
     *
     * @param string $vendor
     * @param string $name
     * @return array
     */
    public function getDependencies(string $vendor = '', string $name = ''):array;

    /**
     * Interface to handle disconnecting from the storage engine.
     *
     * @return void
     */
    public function disconnect():void ;
}
