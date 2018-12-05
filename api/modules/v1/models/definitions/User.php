<?php
/**
 * Created by PhpStorm.
 * User: mariale
 * Date: 11/30/18
 * Time: 10:34 AM
 */

namespace api\v1\models\definitions;

/**
 * @SWG\Definition(required={"username", "email", "password_hash"})
 *
 * @SWG\Property(property="id", type="integer")
 * @SWG\Property(property="email", type="string")
 * @SWG\Property(property="username", type="string")
 * @SWG\Property(property="password_hash", type="string")
 * @SWG\Property(property="password_reset_token", type="string")
 * @SWG\Property(property="auth_key", type="string")
 * @SWG\Property(property="access_token", type="string")
 * @SWG\Property(property="refresh_token", type="string")
 * @SWG\Property(property="status", type="integer")
 * @SWG\Property(property="created_at", type="integer")
 * @SWG\Property(property="updated_at", type="integer")
 * @SWG\Property(property="created_by", type="string")
 * @SWG\Property(property="updated_by", type="string")
 * @SWG\Property(property="password", type="string")

*/
class User
{
}