<?php

/**
 * Base file for records from flat files.
 */
namespace app\models;

class FlatFile extends \yii\base\Model
{
    /**
     * The flat file filename.
     * @var string
     */
    protected $sourceFileName;

    /**
     * The array key of the actual collection data.
     * @var string
     */
    protected $dataKey;

    /**
     * The resulting full path of the source flat file.
     * @var string
     */
    protected $sourceFullPath;

    /**
     * Collection of records retrieved from the file.
     * @var array
     */
    protected $collection;

    /**
     * Set the source full path.
     *
     * @return void
     */
    public function init()
    {
        parent::init();

        $this->sourceFullPath = \Yii::getAlias('@app').DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.$this->sourceFileName;
    }

    /**
     * Loads json content from a source file
     * and save the data (parsed array) into the collection.
     *
     * @return array
     */
    public function getCollection()
    {
        try {
            $this->collection = json_decode(file_get_contents($this->sourceFullPath), true)[$this->dataKey];
        } catch (\Exception $e) {
            \Yii::error($e);
        }

        return $this->collection;
    }
}
