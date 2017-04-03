<?php
class Migration4 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'migration4';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
		),
		'down' => array(
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
    public function after($direction) {
        $post = ClassRegistry::init('Post');
        if ($direction == 'up') {
            for($i=200000;$i<300000;$i++){
                $data['Post']['id'] = $i;
                $data['Post']['title'] = $this->generateRandomString(5).' '.$this->generateRandomString(5).' '.$this->generateRandomString(5).' '.$i;
                $data['Post']['body'] = $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(5).' '.$this->generateRandomString(6). ' '.$this->generateRandomString(4).' '.
                    $this->generateRandomString(7).' '.$this->generateRandomString(5).' '.$this->generateRandomString(4).' '.$this->generateRandomString(6);
                $data['Post']['slug'] = $this->createSlug($data['Post']['title']);
                $data['Post']['user_id'] = 6;
                $post->create();
                $post->save($data);
            }
        }
        return true;
    }

    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function createSlug ($string, $id=null) {
        $slug = Inflector::slug ($string,'-');
        $slug = strtolower($slug);
        return $slug;
    }
}
