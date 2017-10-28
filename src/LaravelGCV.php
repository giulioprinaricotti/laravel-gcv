<?php

namespace LaravelGCV;
use Google\Cloud\Vision\VisionClient;

class LaravelGCV {
	public function colors($file) {

		//EXT PATH
		if (is_string($file) && in_array(parse_url($file, PHP_URL_SCHEME), array('http', 'https'))) {
			$imageData = file_get_contents($file);
		} else {
			$imageData = $file;
		}

		$config = [
			'keyFilePath' => config('gcv.key_file_path'),
			'projectId' => config('gcv.project_id'),
		];

		$vision = new VisionClient($config);
		$image = $vision->image($imageData, [
			'IMAGE_PROPERTIES',
		]);

		$result = $vision->annotate($image);

		if (is_null($result->imageProperties())) {
			return null;
		}

		$colors = $result->imageProperties()->colors();

		return $colors;
	}
}