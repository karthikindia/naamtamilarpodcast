<?php
/////////////////////////////////////////////////////////////////
############################################################
# NAAM TAMILAR PODCAST CMS
#
# Coded by Alagappan Karthikeyan
# https://github.com/karthikindia/naamtamilarpodcast/
# 
# This is Free Software released under the GNU/GPL License.
############################################################
// See readme.txt for more details                             //
/////////////////////////////////////////////////////////////////
//                                                             //
// module.misc.pdf.php                                         //
// module for analyzing PDF files                              //
// dependencies: NONE                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////


class getid3_pdf extends getid3_handler
{

	public function Analyze() {
		$info = &$this->getid3->info;

		$info['fileformat'] = 'pdf';

		$info['error'][] = 'PDF parsing not enabled in this version of getID3() ['.$this->getid3->version().']';
		return false;

	}

}
