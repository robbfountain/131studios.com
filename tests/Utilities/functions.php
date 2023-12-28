<?php
/**
 * @param  $class
 * @param  array  $attributes
 * @param  null  $times
 * @return mixed
 */
function create($class, $attributes = [], $times = null)
{
    return factory($class, $times)->create($attributes);
}

/**
 * @param  $class
 * @param  array  $attributes
 * @param  null  $times
 * @return mixed
 */
function make($class, $attributes = [], $times = null)
{
    return factory($class, $times)->make($attributes);
}

/**
 * @param  $role
 * @return array|mixed
 */
function role($role)
{
    if (is_array($role)) {
        $return = [];
        foreach ($role as $item) {
            $return[] = create('Spatie\Permission\Models\Role', ['name' => $item]);
        }

        return $return;
    }

    return create('Spatie\Permission\Models\Role', ['name' => $role]);
}

/**
 * @param  $permission
 * @return array|mixed
 */
function permission($permission)
{
    if (is_array($permission)) {
        $return = [];
        foreach ($permission as $item) {
            $return[] = create('Spatie\Permission\Models\Permission', ['name' => $item]);
        }

        return $return;
    }

    return create('Spatie\Permission\Models\Permission', ['name' => $permission]);
}

/**
 * @param  $role
 */
function assign($role)
{
    auth()->user()->assignRole($role);
}
