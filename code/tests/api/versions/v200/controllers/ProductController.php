<?php 
namespace api\versions\v200\controllers;
use common\service\ApiService;
use api\common\BaseController;
use api\common\helpers\ReseponseCode as Code;
use common\service\ProductService;
use common\models\QfbBank;
use common\service\MemberService;



class ProductController extends BaseController{
	/**
	 * [actionDetail 产品详情]
	 * @return [type] [description]
	 */
	public function actionDetail(){

		$card_no = 0;
		if(!empty($this->getParams('access_token'))){
			$memberService = new MemberService();
			$member_data = $memberService->findMemberIdByToken($this->getParams('access_token'));

			if(!empty($member_data)){
				// 查询绑卡
				$bank_count = QfbBank::find()->where(['member_id'=>$member_data->id, 'is_del'=>'0'])->count();
				if($bank_count > 0) $card_no = 1;
			}
		}

		$id =intval($this->getParams('id'));
		if($id<=0) return ApiService::send(Code::COMMON_ERROR_CODE,'参数错误');

		$service = new ProductService();
		$model=$service->getDetail($id);
		// 识别是否绑卡
		$model->card_no = $card_no;

		if($model==null) return ApiService::send(Code::COMMON_ERROR_CODE,'产品不存在');

		/*判断是否指定新手购买*/
		if($model->buy == true){

			if($model->is_newer == 1 && $member_data->is_newer != 1){
				$model->buy = false;
				$model->buy_tips = '新手不能购买';
			}
		}

		return ApiService::send(Code::HTTP_OK,'',$model);
	}
	/**
	 * 投资明细
	 * [actionDetaillist description]
	 * @return [type] [description]
	 */
	public function actionBuylist(){
		$params = $this->getParams();
		$service = new ProductService();
		$data=$service->buyProductList($params['product_id'],$params['page'],$params['limit']);
		if($service->getMessages()!=null) return ApiService::send(Code::COMMON_ERROR_CODE,$service->findOneMessage());
		return ApiService::send(Code::HTTP_OK,'',$data);
	}
}