<?php
/********************************************************************************
 * MyBB 1.6 Turkish UTF-8 Dil Paketi                                            *
 * Copyright © 2010 MyBB Group, All Rights Reserved                             *
 *                                                                              *
 * $Id$            												                *
 **************************************************************************************************************
 * Turkish translator  : 27-05-2012 / 17:12:12 - (XpSerkan)                                                   * 
 * Turkish translator  : 22-04-2013 / 22:04:59 - (LoDoS)													  * 
 *                                                                                                            *
 * Turkish translation : Copyright © 2010 TR - MyBBGrup.com - Turkish Website Development All Rights Reserved.*
 **************************************************************************************************************
 */

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$page->add_breadcrumb_item($lang->mybb_credits, "index.php?module=home-credits");

$plugins->run_hooks("admin_home_credits_begin");

if(!$mybb->input['action'])
{
	$plugins->run_hooks("admin_home_credits_start");
	
	$page->output_header($lang->mybb_mctr);
	
	$sub_tabs2['mctr'] = array(
		'title' => $lang->mybb_mctr2,
		'link' => "index.php?module=home-credits",
		'description' => $lang->mybb_mctr_description
	);
	
	$sub_tabs2['mctr_about'] = array(
		'title' => $lang->mctr_team,
		'link' => "http://www.mybb.com.tr/Hakkinda/Ekip/",
		'link_target' => "_blank",
	);

	$page->output_nav_tabs($sub_tabs2, 'mctr');

	$table2 = new table;
	$table2->construct_header($lang->kurucular, array('width' => '11%'));
	$table2->construct_header($lang->yoneticiler, array('width' => '13%'));
	$table2->construct_header($lang->gelistiriciler, array('width' => '12%'));
	$table2->construct_header($lang->destek_ekibi, array('width' => '13%'));
	$table2->construct_header($lang->tema_ekibi, array('width' => '12%'));
    $table2->construct_header($lang->guvenlik, array('width' => '12%'));
	
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=25\" target=\"_blank\">XpSerkan</a> <img src=\"../images/star.png\" style=\"vertical-align: top;\" width=\"12\" height=\"12\" title=\"Grup Lideri\" border=\"0\">");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=84\" target=\"_blank\">EmreKarakaya</a> <img src=\"../images/star.png\" style=\"vertical-align: top;\" width=\"12\" height=\"12\" title=\"Grup Lideri\" border=\"0\">");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=247\" target=\"_blank\">Remzi0068</a> <img src=\"../images/star.png\" style=\"vertical-align: top;\" width=\"12\" height=\"12\" title=\"Grup Lideri\" border=\"0\">");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=12315\" target=\"_blank\">devmybb</a> <img src=\"../images/star.png\" style=\"vertical-align: top;\" width=\"12\" height=\"12\" title=\"Grup Lideri\" border=\"0\">");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=3235\" target=\"_blank\">Respect</a> <img src=\"../images/star.png\" style=\"vertical-align: top;\" width=\"12\" height=\"12\" title=\"Grup Lideri\" border=\"0\">");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=7544\" target=\"_blank\">Ryuzaki</a> <img src=\"../images/star.png\" style=\"vertical-align: top;\" width=\"12\" height=\"12\" title=\"Grup Lideri\" border=\"0\">");
	$table2->construct_row();
	
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=75\" target=\"_blank\">LoDoS</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=264\" target=\"_blank\">chatlak49</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=4795\" target=\"_blank\">Pyrotoxin</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=3313\" target=\"_blank\">GeCeCi KaBuS</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=4160\" target=\"_blank\">Mecruh</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();	
	
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=2\" target=\"_blank\">S.G</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=348\" target=\"_blank\">BlackCat</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=12259\" target=\"_blank\">Screwy</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=811\" target=\"_blank\">LiBeRtY</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();
	
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=1797\" target=\"_blank\">YaPRaQQ</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=12374\" target=\"_blank\">Smyrna35</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=1113\" target=\"_blank\">Nevadia</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();
	
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=2743\" target=\"_blank\">Owner</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=12631\" target=\"_blank\">SvMedeT</a>");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=3525\" target=\"_blank\">ReDMaD</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();

	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=12633\" target=\"_blank\">Mecdunov</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();
	
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=526\" target=\"_blank\">eXiGent</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();
	
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=4973\" target=\"_blank\">Machine</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();
	
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("<a rel=\"nofollow\" href=\"http://destek.mybb.com.tr/member.php?action=profile&uid=12638\" target=\"_blank\">TakaharaShujin</a>");
	$table2->construct_cell("&nbsp;");
	$table2->construct_cell("&nbsp;");
	$table2->construct_row();
	
	$table2->output($lang->mybb_mctr);
	
	$sub_tabs['credits'] = array(
		'title' => $lang->mybb_credits,
		'link' => "index.php?module=home-credits",
		'description' => $lang->mybb_credits_description
	);
	
	$sub_tabs['credits_about'] = array(
		'title' => $lang->about_the_team,
		'link' => "http://mybb.com/about/team",
		'link_target' => "_blank",
	);

	$page->output_nav_tabs($sub_tabs, 'credits');
	
	$table = new Table;
	$table->construct_header($lang->product_managers, array('width' => '15%'));
	$table->construct_header($lang->developers, array('width' => '15%'));
	$table->construct_header($lang->software_quality_assurance, array('width' => '20%'));
	$table->construct_header($lang->support_representative, array('width' => '20%'));
	$table->construct_header($lang->pr_liaison, array('width' => '15%'));
	
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-1.html\" target=\"_blank\">Chris Boulton</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-8242.html\" target=\"_blank\">dvb</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-6928.html\" target=\"_blank\">Imad Jomaa</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-24328.html\" target=\"_blank\">Alan Shepperson</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-3971.html\" target=\"_blank\">Ryan Loos</a>");
	$table->construct_row();
	
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-81.html\" target=\"_blank\">Dennis Tsang</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-23291.html\" target=\"_blank\">Huji Lee</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-12694.html\" target=\"_blank\">Jitendra M</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-22890.html\" target=\"_blank\">Dylan M</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();	
	
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-8198.html\" target=\"_blank\">Tim B.</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-24611.html\" target=\"_blank\">Jammerx2</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-15525.html\" target=\"_blank\">Kieran Dunbar</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-21114.html\" target=\"_blank\">euantor</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();
	
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-1830.html\" target=\"_blank\">Justin Soltesz</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-57502.html\" target=\"_blank\">King Louis</a>");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-16693.html\" target=\"_blank\">F&aacute;bio Maia</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();
	
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-63966.html\" target=\"_blank\">KevinVR</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-23276.html\" target=\"_blank\">Leefish</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();
	
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-7331.html\" target=\"_blank\">Mike Creuzer</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-13556.html\" target=\"_blank\">Matt Rogowski</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();

	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-27579.html\" target=\"_blank\">Nathan Malcolm</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-25096.html\" target=\"_blank\">Omar G.</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();

	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-8582.html\" target=\"_blank\">Pirata Nervo</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-37431.html\" target=\"_blank\">Paul H.</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();

	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-2824.html\" target=\"_blank\">Stefan T.</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-19236.html\" target=\"_blank\">Sam S.</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();

	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-14621.html\" target=\"_blank\">Tom Moore</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_cell("<a rel=\"nofollow\" href=\"http://community.mybb.com/user-55924.html\" target=\"_blank\">Vernier</a>");
	$table->construct_cell("&nbsp;");
	$table->construct_row();

	$table->output($lang->mybb_credits);
	
	$page->output_footer();
}

?>