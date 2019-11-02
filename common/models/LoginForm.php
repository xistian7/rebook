<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;
    private $_role = 0;


    public function __construct($role = 0, $config = [])
    {

        $this->_role = $role;

        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, Yii::t('app','Incorrect username or password.'));
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $user = $this->getUser();
            Yii::$app->session['_lang'] = $user->language_id;
            Yii::$app->language = $user->language_id;
            return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }
    
     public function loginSinPassword($user)
    {
            Yii::$app->session['_lang'] = $user->language_id;
            Yii::$app->language = $user->language_id;
            return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);
    }
    
    public function loginAPP()
    {
        if ($this->validate()) {
            $user = $this->getUser();
            Yii::$app->session['_lang'] = $user->language_id;
            Yii::$app->language = $user->language_id;
            return $user;
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username,$this->_role);
        }

        return $this->_user;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rememberMe' => Yii::t('app', 'Remember me'),
        ];
    }
}
