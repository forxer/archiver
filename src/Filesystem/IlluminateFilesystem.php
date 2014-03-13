<?php
/*
 * This file is part of Forxer\Archiver.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Forxer\Archiver\Filesystem;

use Forxer\Archiver\Filesystem\FilesystemInterface;
use Illuminate\Filesystem\Filesystem as BaseFilesystem;

class IlluminateFilesystem extends BaseFilesystem implements FilesystemInterface
{
	/**
	 * Create a directory.
	 *
	 * @param  string  $path
	 * @param  int     $mode
	 * @return bool
	 */
	public function mkdir($path, $mode = 0777)
	{
		return $this->makeDirectory($path, $mode, $recursive = false, false);
	}

	/**
	 * Removes files or directories.
	 *
	 * @param  string  $path
	 * @return bool
	 */
	public function remove($path)
	{
		return $this->delete($path);
	}
}
