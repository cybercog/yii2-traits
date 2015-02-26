<?php

namespace dlds\giixer\components\traits;

/**
 * Makes whole active record read-only
 */
trait ReadOnlyActiveRecord {

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public function save($runValidation = true, $attributeNames = null)
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public function updateAttributes($attributes)
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public function insert($runValidation = true, $attributes = null)
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    protected function insertInternal($attributes = null)
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public function update($runValidation = true, $attributeNames = null)
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    protected function updateInternal($attributes = null)
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public function delete()
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    protected function deleteInternal()
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public static function updateAll($attributes, $condition = '', $params = [])
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public static function updateAllCounters($counters, $condition = '', $params = [])
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    public static function deleteAll($condition = '', $params = [])
    {
        return self::throwNotAllowedException(__FUNCTION__);
    }

    /**
     * Throw not allowed exception
     * @param string $function called funciton name
     * @throws \yii\web\MethodNotAllowedHttpException
     */
    protected function throwNotAllowedException($function)
    {
        $message = \Yii::t('app', 'Calling method "{class}::{function}()" is not allowed. AR is read only.', [
                    'class' => static::classname(),
                    'function' => $function,
        ]);

        throw new \yii\web\MethodNotAllowedHttpException($message);
    }

}
