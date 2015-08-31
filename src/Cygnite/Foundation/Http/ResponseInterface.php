<?php
namespace Cygnite\Foundation\Http;

/**
 * Class ResponseInterface
 *
 * @package Cygnite\Foundation\Http
 */
interface ResponseInterface
{
    /**
     * <code>
     *
     *  Response::make($content, 200)->send();
     *
     *  Response::make($content, function ($response)
     *  {
     *      return $response->setHeader($key, $value)->send();
     *  });
     *
     * </code>
     *
     * @param string       $content
     * @param callable|int $statusCode
     * @param array        $headers
     * @return static
     */
    public static function make($content = '', $statusCode = 200, $headers = []);

    /**
     * @param null $content
     * @return mixed
     */
    public function setContent($content = null);

    /**
     * @return mixed
     */
    public function getContent();

    /**
     * @param int $statusCode
     * @return mixed
     */
    public function setStatusCode($statusCode = 200);

    /**
     * @return mixed
     */
    public function getStatusCode();

    /**
     * @param      $name
     * @param      $value
     * @param bool $replace
     * @return mixed
     */
    public function setHeader($name, $value, $replace = true);

    /**
     * @param $contentType
     * @return mixed
     */
    public function setContentType($contentType);

    /**
     * @return mixed
     */
    public function getContentType();

    /**
     * @param $charset
     * @return mixed
     */
    public function setCharset($charset);

    /**
     * @return mixed
     */
    public function getCharset();

    /**
     * Send header and content to the browser
     *
     * @return $this
     */
    public function send();
}