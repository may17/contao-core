 * Copyright (c) 2005-2016 Leo Feyer
 * @license LGPL-3.0+
 * @author Leo Feyer <https://github.com/leofeyer>

		if (file_exists(TL_ROOT . '/' . $strDirectory))
		{
			return true;
		}

		return mkdir(TL_ROOT . '/' . $strDirectory);

		if (!file_exists(TL_ROOT . '/' . $strDirectory))
		{
			return true;
		}

		return rmdir(TL_ROOT. '/' . $strDirectory);





