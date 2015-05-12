<?php
/** Erzya (эрзянь)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Amdf
 * @author Botuzhaleny-sodamo
 * @author Erzianj jurnalist
 * @author Kaganer
 * @author MF-Warburg
 * @author Spacebirdy
 * @author Sura
 * @author Tupikovs
 * @author Urhixidur
 * @author Игорь Бродский
 */

$fallback = 'ru';

$namespaceNames = array(
	NS_MEDIA            => 'Медия',
	NS_SPECIAL          => 'Башка_тевень',
	NS_TALK             => 'Кортамо',
	NS_USER             => 'Теиця',
	NS_USER_TALK        => 'Теицянь_кортамось',
	NS_PROJECT_TALK     => '$1_кортамось',
	NS_FILE             => 'Артовкс',
	NS_FILE_TALK        => 'Артовксто_кортамось',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki-нь_кортамось',
	NS_TEMPLATE         => 'ЛопаПарцун',
	NS_TEMPLATE_TALK    => 'ЛопаПарцундо_кортамось',
	NS_HELP             => 'Лезкс',
	NS_HELP_TALK        => 'Лезкстэ_кортамось',
	NS_CATEGORY         => 'Категория',
	NS_CATEGORY_TALK    => 'Категориядо_кортамось',
);

// Remove Russian aliases
$namespaceGenderAliases = array();

$specialPageAliases = array(
	'Allmessages'               => array( 'ВесеПачтямнэть' ),
	'Allpages'                  => array( 'ВесеЛопат' ),
	'Ancientpages'              => array( 'ТюштяПингеньЛопат' ),
	'Blankpage'                 => array( 'ЧавоЛопа' ),
	'Block'                     => array( 'СаймасСаемсIP' ),
	'Booksources'               => array( 'КнигаЛисьмапрят' ),
	'BrokenRedirects'           => array( 'СинденьЛиявНевтемат' ),
	'Categories'                => array( 'Категорият' ),
	'ChangePassword'            => array( 'СовамоВалоньПолавтома' ),
	'Contributions'             => array( 'Поладкст' ),
	'CreateAccount'             => array( 'ТеемсШкамсСовамоТарка' ),
	'Deadendpages'              => array( 'ЛисемаСюлмавомаПевтемеЛопат' ),
	'DoubleRedirects'           => array( 'КавтоньКирданьЛиявНевтемат' ),
	'ExpandTemplates'           => array( 'ПоладомсЛопаПарцунт' ),
	'Export'                    => array( 'Экспортировамс' ),
	'Fewestrevisions'           => array( 'ВесемедеАламокстьЛиякстомтозь' ),
	'Filepath'                  => array( 'ФайланьКи' ),
	'Import'                    => array( 'Импортировамс' ),
	'Listfiles'                 => array( 'АртовксКерькс' ),
	'Lockdb'                    => array( 'СёлгомсДБ' ),
	'Lonelypages'               => array( 'СькамнестЛопат', 'УрозЛопат' ),
	'Longpages'                 => array( 'КувакаЛопат' ),
	'MIMEsearch'                => array( 'MIMEВешнема' ),
	'Mostcategories'            => array( 'ВесемедеЛамоКатегорияМарто' ),
	'Mostimages'                => array( 'ВесемедеЛамоАртовксМарто' ),
	'Mostlinked'                => array( 'СехтеЛамоСюлмавомаПеМартот' ),
	'Mostlinkedcategories'      => array( 'СехтеЛамоСюлмавомаПеМартоКатегорият' ),
	'Mostlinkedtemplates'       => array( 'СехтеЛамоСюлмавомаПеМартоЛопаПарцунт' ),
	'Mostrevisions'             => array( 'ВесемедеЛамокстьЛиякстомтозь' ),
	'Movepage'                  => array( 'ПечтевтемсЛопа' ),
	'Mycontributions'           => array( 'МонМезеТеинь' ),
	'MyLanguage'                => array( 'Келем' ),
	'Mypage'                    => array( 'МоньЛопам' ),
	'Mytalk'                    => array( 'МоньКортамом' ),
	'Newimages'                 => array( 'ОдАртовкст' ),
	'Newpages'                  => array( 'ОдЛопат' ),
	'Popularpages'              => array( 'ЛисийСовийМартоЛопат' ),
	'Protectedpages'            => array( 'ВанстоньЛопат' ),
	'Protectedtitles'           => array( 'ВанстоньКонякст' ),
	'Randompage'                => array( 'КодамоПонгсьЛопа' ),
	'Recentchanges'             => array( 'ЧыяконьПолавтомат' ),
	'Recentchangeslinked'       => array( 'МалавиксПолавтомат' ),
	'Revisiondelete'            => array( 'ЛиякстомтоманьНардамо' ),
	'Search'                    => array( 'Вешнемс' ),
	'Shortpages'                => array( 'НурькинеЛопат' ),
	'Specialpages'              => array( 'БашкаТевеньЛопат' ),
	'Statistics'                => array( 'Статистика' ),
	'Uncategorizedcategories'   => array( 'КатегориясАпакСовавтоСатегорият' ),
	'Uncategorizedimages'       => array( 'КатегориявтомоАртовкст' ),
	'Uncategorizedpages'        => array( 'КатегориявтомоЛопат' ),
	'Uncategorizedtemplates'    => array( 'КатегориявтомоЛопаПарцунт' ),
	'Undelete'                  => array( 'Вельмевтемс' ),
	'Unlockdb'                  => array( 'ПанжомсДБ' ),
	'Unusedcategories'          => array( 'ТевсАНолдавицяКатегорият' ),
	'Unusedimages'              => array( 'ТевсАНолдавицяАртовкст' ),
	'Unusedtemplates'           => array( 'ТевсАпакНолдаЛопаПарцунт' ),
	'Unwatchedpages'            => array( 'ВанстнемавтомоЛопат' ),
	'Upload'                    => array( 'Ёвкстамо' ),
	'Userlogin'                 => array( 'ТеицяСовамо' ),
	'Userlogout'                => array( 'ТеицяЛисема' ),
	'Userrights'                => array( 'ТеицяньВидечыть' ),
	'Version'                   => array( 'Версия' ),
	'Wantedcategories'          => array( 'ВешезьКатегорият' ),
	'Wantedfiles'               => array( 'ВешезьФайлат' ),
	'Wantedpages'               => array( 'ВешезьЛопат' ),
	'Wantedtemplates'           => array( 'ВешезьЛопапарцунт' ),
	'Watchlist'                 => array( 'ВанстнемаКерькс' ),
	'Whatlinkshere'             => array( 'ТезэньКодамтСюлмавомаПеть' ),
);

$magicWords = array(
	'currentmonth'              => array( '1', 'МОЛИЦЯКОВ', 'ТЕКУЩИЙ_МЕСЯЦ', 'ТЕКУЩИЙ_МЕСЯЦ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'МОЛИЦЯКОВЛЕМ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'МОЛИЦЯКОВЛЕМГЕН', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_РОД', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'МОЛИЦЯКОВКИРЬТЯНЬХВОРМА', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_АБР', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'МОЛИЦЯЧЫ', 'ТЕКУЩИЙ_ДЕНЬ', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'МОЛИЦЯЧЫ2', 'ТЕКУЩИЙ_ДЕНЬ_2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'МОЛИЦЯЧЫЛЕМ', 'НАЗВАНИЕ_ТЕКУЩЕГО_ДНЯ', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'МОЛИЦЯИЕ', 'ТЕКУЩИЙ_ГОД', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'МОЛИЦЯШКА', 'ТЕКУЩЕЕ_ВРЕМЯ', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'МОЛИЦЯЦЯС', 'ТЕКУЩИЙ_ЧАС', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'ТЕСКЭНЬКОВ', 'МЕСТНЫЙ_МЕСЯЦ', 'МЕСТНЫЙ_МЕСЯЦ_2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonthname'            => array( '1', 'ТЕСКЭНЬКОВЛЕМ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'ТЕСКЭНЬКОВЛЕМГЕН', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_РОД', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'ТЕСКЭНЬКОВКИРЬТЯНЬХВОРМА', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_АБР', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'ТЕСКЭНЬЧЫ', 'МЕСТНЫЙ_ДЕНЬ', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'ТЕСКЭНЬЧЫ2', 'МЕСТНЫЙ_ДЕНЬ_2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'ТЕСКЭНЬЧЫЛЕМ', 'НАЗВАНИЕ_МЕСТНОГО_ДНЯ', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ТЕСКЭНЬИЕ', 'МЕСТНЫЙ_ГОД', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'ТЕСКЭНЬШКА', 'МЕСТНОЕ_ВРЕМЯ', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ТЕСКЭНЬЦЯС', 'МЕСТНЫЙ_ЧАС', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'ЗЯРОЛОПАТ', 'КОЛИЧЕСТВО_СТРАНИЦ', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'ЗЯРОСЁРМАДОВКСТ', 'КОЛИЧЕСТВО_СТАТЕЙ', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'ЗЯРОФАЙЛАТ', 'КОЛИЧЕСТВО_ФАЙЛОВ', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'ЗЯРОТЕИЦЯТ', 'КОЛИЧЕСТВО_УЧАСТНИКОВ', 'NUMBEROFUSERS' ),
	'numberofedits'             => array( '1', 'ЗЯРОВИТНЕМАТПЕТНЕМАТ', 'КОЛИЧЕСТВО_ПРАВОК', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'ЛОПАЛЕМ', 'НАЗВАНИЕ_СТРАНИЦЫ', 'PAGENAME' ),
	'namespace'                 => array( '1', 'ЛЕМПОТМО', 'ПРОСТРАНСТВО_ИМЁН', 'NAMESPACE' ),
	'talkspace'                 => array( '1', 'КОРТАМОПОТМО', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ', 'TALKSPACE' ),
	'fullpagename'              => array( '1', 'ЛОПАЛЕМКУВАКАСТО', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ', 'FULLPAGENAME' ),
	'talkpagename'              => array( '1', 'КОРТАМОЛОПАЛЕМ', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ', 'TALKPAGENAME' ),
	'msg'                       => array( '0', 'ПАЧТЯМНЭ:', 'СООБЩЕНИЕ:', 'СООБЩ:', 'MSG:' ),
	'img_thumbnail'             => array( '1', 'кенжешка', 'мини', 'миниатюра', 'thumbnail', 'thumb' ),
	'img_right'                 => array( '1', 'вить_кедь', 'справа', 'right' ),
	'img_left'                  => array( '1', 'керш_кедь', 'слева', 'left' ),
	'img_none'                  => array( '1', 'вейкеяк_арась', 'без', 'none' ),
	'img_center'                => array( '1', 'куншкасо', 'центр', 'center', 'centre' ),
	'img_framed'                => array( '1', 'кундсо', 'обрамить', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'кундовтомо', 'безрамки', 'frameless' ),
	'img_page'                  => array( '1', 'лопа=$1', 'лопа_$1', 'страница=$1', 'страница_$1', 'страница $1', 'page=$1', 'page $1' ),
	'img_top'                   => array( '1', 'верькс', 'сверху', 'top' ),
	'img_text_top'              => array( '1', 'текст-верькс', 'текст-сверху', 'text-top' ),
	'img_middle'                => array( '1', 'куншка', 'посередине', 'middle' ),
	'img_bottom'                => array( '1', 'алкс', 'снизу', 'bottom' ),
	'img_text_bottom'           => array( '1', 'текст-алкс', 'текст-снизу', 'text-bottom' ),
	'sitename'                  => array( '1', 'САЙТЛЕМ', 'НАЗВАНИЕ_САЙТА', 'SITENAME' ),
	'gender'                    => array( '0', 'СЫМЕ:', 'ПОЛ:', 'GENDER:' ),
	'currentweek'               => array( '1', 'МОЛИЦЯ_ТАРГО', 'ТЕКУЩАЯ_НЕДЕЛЯ', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'МОЛИЦЯ_ЧИ', 'ТЕКУЩИЙ_ДЕНЬ_НЕДЕЛИ', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'ТЕСКЭНЬТАРГО', 'МЕСТНАЯ_НЕДЕЛЯ', 'LOCALWEEK' ),
	'revisionid'                => array( '1', 'ЛИЯКСТОМТОМАID', 'ИД_ВЕРСИИ', 'REVISIONID' ),
	'revisionday'               => array( '1', 'ЛИЯКСТОМТОМАЧЫ', 'ДЕНЬ_ВЕРСИИ', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'ЛИЯКСТОМТОМАЧЫ2', 'ДЕНЬ_ВЕРСИИ_2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'ЛИЯКСТОМТОМАКОВ', 'МЕСЯЦ_ВЕРСИИ', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ЛИЯКСТОМТОМАИЕ', 'ГОД_ВЕРСИИ', 'REVISIONYEAR' ),
	'plural'                    => array( '0', 'ЛАМОНЬЧИСЛА', 'МНОЖЕСТВЕННОЕ_ЧИСЛО:', 'PLURAL:' ),
	'lcfirst'                   => array( '0', 'ВАСЕНЦЕ_ТЕШТЬКЕСЬ_ВИШКИНЕ:', 'ПЕРВАЯ_БУКВА_МАЛЕНЬКАЯ:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'ВАСЕНЦЕ_ТЕШТЬКЕСЬ_ПОКШ:', 'ПЕРВАЯ_БУКВА_БОЛЬШАЯ:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'ВИШКА_ТЕШТЬКЕСЭ:', 'МАЛЕНЬКИМИ_БУКВАМИ:', 'LC:' ),
	'uc'                        => array( '0', 'ПОШК_ТЕШТЬКЕСЭ:', 'БОЛЬШИМИ_БУКВАМИ:', 'UC:' ),
	'raw'                       => array( '0', 'ВЕРЕКСТЭ', 'НЕОБРАБ:', 'RAW:' ),
	'displaytitle'              => array( '1', 'НЕВТЕМС_КОНЯКС', 'ПОКАЗАТЬ_ЗАГОЛОВОК', 'DISPLAYTITLE' ),
	'currentversion'            => array( '1', 'ТЕВАТЕВЕРСИЯ', 'ТЕКУЩАЯ_ВЕРСИЯ', 'CURRENTVERSION' ),
	'language'                  => array( '0', '#КЕЛЕСЬ:', '#ЯЗЫК:', '#LANGUAGE:' ),
	'numberofadmins'            => array( '1', 'ЗЯРОАДМИНТНЭДЕ', 'КОЛИЧЕСТВО_АДМИНИСТРАТОРОВ', 'NUMBEROFADMINS' ),
	'special'                   => array( '0', 'башка_тевень', 'служебная', 'special' ),
	'filepath'                  => array( '0', 'ФАЙЛАНЬКИ', 'ПУТЬ_К_ФАЙЛУ:', 'FILEPATH:' ),
	'pagesize'                  => array( '1', 'ЛОПАКУВАЛМО', 'РАЗМЕР_СТРАНИЦЫ', 'PAGESIZE' ),
	'url_path'                  => array( '0', 'ЯН', 'ПУТЬ', 'PATH' ),
	'url_wiki'                  => array( '0', 'ВИКИ', 'WIKI' ),
);

