<?php

namespace App\Contracts;

interface HttpHelperContract
{
  /**
   * Url
   *
   * @param string $url
   * @return void
   */
  public function domain(string $url);

  /**
   * API Key
   *
   * @param string $key
   * @return void
   */
  public function key(string $key);

  /**
   * API Endpoint
   *
   * @param string $endpoint
   * @return void
   */
  public function endpoint(string $endpoint);

  /**
   * Response Headers
   *
   * @param array $headers
   * @return void
   */
  public function headers(array $headers);

  /**
   * Response Body
   *
   * @param array $body
   * @return void
   */
  public function body(array $body);
}
