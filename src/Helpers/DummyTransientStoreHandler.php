<?php
declare(strict_types=1);

namespace Auth0\SDK\Helpers;

use Auth0\SDK\Store\StoreInterface;

/**
 * Class TransientStoreHandler
 *
 * @package Auth0\SDK\Helpers
 */
class DummyTransientStoreHandler
{

    /**
     * Storage method to use.
     *
     * @var StoreInterface
     */
    private $store;

    /**
     * TransientStoreHandler constructor.
     *
     * @param StoreInterface $store Storage method to use.
     */
    public function __construct(StoreInterface $store)
    {
        $this->store = $store;
    }

    /**
     * Store a value for a specific key.
     *
     * @param string $key   Key to use.
     * @param string $value Value to store.
     *
     * @return void
     */
    public function store(string $key, string $value) : void
    {
    }

    /**
     * Generate and store a random nonce value for a key.
     *
     * @param string $key Key to use.
     *
     * @return string|null
     */
    public function issue(string $key) : ?string
    {
        return null;
    }

    /**
     * Check if a key has a stored value or not.
     *
     * @param string $key Key to check.
     *
     * @return boolean
     */
    public function isset(string $key) : bool
    {
        return true;
    }

    /**
     * Get a value and delete it from storage.
     *
     * @param string $key Key to get and delete.
     *
     * @return string|null
     */
    public function getOnce(string $key)
    {
        return null;
    }

    /**
     * Get a value once and check that it matches an existing value.
     *
     * @param string $key      Key to get once.
     * @param string|null $expected Value expected.
     *
     * @return boolean
     */
    public function verify(string $key, ?string $expected = null) : bool
    {
        return true;
    }
}
