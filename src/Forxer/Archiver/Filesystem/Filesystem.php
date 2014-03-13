<?php
/*
 * This file is part of Forxer\Archiver.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Forxer\Archiver\Filesystem;

use Forxer\Archiver\Filesystem\FilesystemInterface;

class Filesystem implements FilesystemInterface
{
	/**
	 * Determine if a file exists.
	 *
	 * @param  string  $path
	 * @return bool
	 */
	public function exists($path)
	{
		return file_exists($path);
	}

	/**
	 * Create a directory.
	 *
	 * @param  string  $path
	 * @param  int     $mode
	 * @return bool
	 */
	public function mkdir($path, $mode = 0777)
	{
		return mkdir($path, $mode, true);
	}

	/**
	 * Determine if the given path is a file.
	 *
	 * @param  string  $file
	 * @return bool
	 */
	public function isFile($file)
	{
		return is_file($file);
	}

	/**
	 * Determine if the given path is writable.
	 *
	 * @param  string  $path
	 * @return bool
	 */
	public function isWritable($path)
	{
		return is_writable($path);
	}

	/**
	 * Removes files or directories.
	 *
	 * @param  string  $path
	 * @return bool
	 */
	public function remove($path)
	{
		return @unlink($path);
	}
}
