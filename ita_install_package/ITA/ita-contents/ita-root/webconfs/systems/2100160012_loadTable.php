<?php
//   Copyright 2019 NEC Corporation
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.
//
$tmpFx = function (&$aryVariant=array(),&$arySetting=array()){
    global $g;

    $arrayWebSetting = array();
    $arrayWebSetting['page_info'] = $g['objMTS']->getSomeMessage("ITACREPAR-MNU-102701");

    $table = new TableControlAgent('G_MENU_REFERENCE_ITEM','ITEM_ID', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-102702"), 'G_MENU_REFERENCE_ITEM_JNL' );
    $tmpAryColumn = $table->getColumns();
    unset($tmpAryColumn);

    // エクセルのファイル名
    $table->setDBMainTableLabel($g['objMTS']->getSomeMessage("ITACREPAR-MNU-102703"));
    //$table->setDBMainTableLabel($g['objMTS']->getSomeMessage("ITACREPAR-MNU-102703"));
    // エクセルのシート名
    $table->getFormatter('excel')->setGeneValue('sheetNameForEditByFile', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-102704"));
    //$table->getFormatter('excel')->setGeneValue('sheetNameForEditByFile', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-102704"));

    $table->setAccessAuth(true);    // データごとのRBAC設定


    // 他メニュー連携ID
    $c = new TextColumn('LINK_ID', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105001"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105002"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // 表示順序
    $c = new TextColumn('DISP_SEQ', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105003"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105004"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // テーブル名
    $c = new TextColumn('TABLE_NAME', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105005"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105006"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // 主キー
    $c = new TextColumn('PRI_NAME', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105007"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105008"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // カラム名
    $c = new TextColumn('COLUMN_NAME', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105009"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105010"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // 項目名
    $c = new TextColumn('ITEM_NAME', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105011"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105012"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // カラムグループ
    $c = new TextColumn('COL_GROUP_NAME', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105013"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105014"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // 説明
    $c = new TextColumn('DESCRIPTION', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105015"));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105016"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // 入力方式
    $c = new IDColumn('INPUT_METHOD_ID', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105017"),'F_INPUT_METHOD','INPUT_METHOD_ID','INPUT_METHOD_NAME','', array('OrderByThirdColumn'=>'INPUT_METHOD_ID'));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105018"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // SENSITIVE設定
    $c = new IDColumn('SENSITIVE_FLAG', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105019"), 'B_SENSITIVE_FLAG', 'VARS_SENSITIVE', 'VARS_SENSITIVE_SELECT', '', array('SELECT_ADD_FOR_ORDER'=>array('VARS_SENSITIVE'), 'ORDER'=>'ORDER BY ADD_SELECT_1'));
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105020"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);

    // マスターカラム
    $c = new IDColumn('MASTER_COL_FLAG', $g['objMTS']->getSomeMessage("ITACREPAR-MNU-105021"),'D_FLAG_LIST_01','FLAG_ID','FLAG_NAME','');
    $c->setDescription($g['objMTS']->getSomeMessage("ITACREPAR-MNU-105022"));//エクセル・ヘッダでの説明
    $c->setAllowSendFromFile(false); //excelでの更新を禁止
    $c->getOutputType('update_table')->setVisible(false);
    $c->getOutputType('register_table')->setVisible(false);
    $c->getOutputType('excel')->setVisible(true);
    $c->getOutputType('csv')->setVisible(false);
    $c->getOutputType('json')->setVisible(false);
    $table->addColumn($c);


    $table->fixColumn();
    
    $table->setGeneObject('webSetting', $arrayWebSetting);
    return $table;
};
loadTableFunctionAdd($tmpFx,__FILE__);
unset($tmpFx);
?>