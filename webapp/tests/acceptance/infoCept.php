<?php 
$I->wait(10);
$I->wantTo('Perform actions and see result');
$I->amOnPage('/');
$I->wantTo('Check the title of info page.');
$I->seeInTitle('�yELLE�z�t�@�b�V�����E�Z���u�ŐV���b�G���E�I�����C��');
