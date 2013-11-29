 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @link    https://contao.org
 *
 *
 *
 *
 *
 *
 *
 * @copyright Leo Feyer 2005-2013
	 *
			elseif ($GLOBALS['TL_CONFIG']['useSmhExtended'] && in_array('smhextended', \ModuleLoader::getActive()))
	 *
	 *
	 *
	 *
	 *
		$arrFiles = scan(TL_ROOT . '/' . $strFolder, true);
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	/**
	 * Recursively copy a directory
	 *
	 * @param string $strSource      The source file or folder
	 * @param string $strDestination The new file or folder path
	 */
	public function rcopy($strSource, $strDestination)
	{
		$this->validate($strSource, $strDestination);

		$this->mkdir($strDestination);
		$arrFiles = scan(TL_ROOT . '/' . $strSource, true);

		foreach ($arrFiles as $strFile)
		{
			if (is_dir(TL_ROOT . '/' . $strSource . '/' . $strFile))
			{
				$this->rcopy($strSource . '/' . $strFile, $strDestination . '/' . $strFile);
			}
			else
			{
				$this->copy($strSource . '/' . $strFile, $strDestination . '/' . $strFile);
			}
		}
	}


	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 *
			if ($strPath == '') // see #5795
			{
				throw new \Exception('No file or folder name given');
			}
			elseif (strpos($strPath, '../') !== false)