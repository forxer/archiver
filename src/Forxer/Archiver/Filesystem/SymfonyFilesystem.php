<?php
/*
 * This file is part of Forxer\Archiver.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Forxer\Archiver\Filesystem;

use Forxer\Archiver\Filesystem\FilesystemInterface;
use Symfony\Component\Filesystem\Filesystem;

class SymfonyFilesystem extends Filesystem implements FilesystemInterface
{

}
