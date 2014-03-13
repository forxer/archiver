<?php
/*
 * This file is part of Forxer\Archiver.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Forxer\Archiver\Filesystem;

interface FilesystemInterface
{
	/**
	 * Determine if a file exists.
	 *
	 * @param  string  $path
	 * @return bool
	 */
	public function exists($path);

	/**
	 * Create a directory.
	 *
	 * @param  string  $path
	 * @param  int     $mode
	 * @return bool
	 */
	public function mkdir($path, $mode = 0777);

	/**
	 * Determine if the given path is a file.
	 *
	 * @param  string  $file
	 * @return bool
	 */
	public function isFile($file);

	/**
	 * Determine if the given path is writable.
	 *
	 * @param  string  $path
	 * @return bool
	 */
	public function isWritable($path);

	/**
	 * Removes files or directories.
	 *
	 * @param  string|array  $paths
	 * @return bool
	 */
	public function remove($files);
}
