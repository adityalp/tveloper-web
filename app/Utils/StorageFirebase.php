<?php

namespace App\Utils;

class StorageFirebase {

    private static $instance = null;
    private static $bucketFirebase;

    // constant directory in firebase
    private const DIR = "tveloper";

    function __construct() {
        $storage = app('firebase.storage');

        self::$bucketFirebase = $storage->getBucket();
    }

    static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new StorageFirebase();
        }

        return self::$instance;
    }

    /**
     * $params is file-name in firebase that related with our databaase
     * @return object data
     */
    static function get($param) {
        $object = self::$bucketFirebase->object($param);
        $info = $object->info();

        return response()->json($info);
    }

    /**
     * $params is array of file-name in firebase that related with our databaase
     * @return array of object data
     */
    static function gets($params = []) {
        $results = [];
        foreach($params as $elem) {
            $info = self::get($elem);

            array_push($results, [$elem => $info]);
        }

        return $results;
    }

    /**
     * $destination is custom directory in firebase
     * $params is request->image() data
     * @return object data
     */
    static function store($destination = "", $params) {
        if (empty($params->path())) {
            return response()->json("no file found");
        }

        $file = fopen($params->path(), 'r');
        $object = self::$bucketFirebase->upload($file, [
            'name' => self::DIR . "/$destination/" . time() . $params->getClientOriginalName(),
            [
                'predefinedAcl' => 'publicRead'
            ]
        ]);

        return response()->json($object);
    }

    /**
     * $destination is custom directory in firebase
     * $params is array of request->image() data
     * @return array of object data
     */    
    static function stores($destination = "", $params = []) {
        $results = [];
        foreach ($params as $elem) {
            $object = self::store($destination, $elem);
 
            array_push($results, $object);
        }

        return $results;
    }

    /**
     * $params is file-name in firebase that related with our databaase
     * @return deleted object data
     */
    static function remove($param) {
        $object = self::$bucketFirebase->object($param);
        return $object->delete();
    }

    /**
     * $params is array of file-name in firebase that related with our databaase
     * @return array of deleted object data
     */    
    static function removes($params = []) {
        $results = [];
        foreach($params as $elem) {
            $info = self::remove($elem);

            array_push($results, $info);
        }
        return $results;
    }
}