<?php
/**
 * ZHIMA API: zhima.customer.performance.feedback request
 *
 * @author auto create
 * @since 1.0, 2016-12-22 17:42:59
 */
class ZhimaCustomerPerformanceFeedbackRequest
{
	/** 
	 * 用户证件号码
	 **/
	private $certNo;
	
	/** 
	 * 证件类型
	 **/
	private $certType;
	
	/** 
	 * 用户姓名
	 **/
	private $name;
	
	/** 
	 * 商户反馈的某用户还款计划数据，格式：
[
    {
        "repayment_id": "201609237771",
        "installments": [
            {
                "installment_id": "201609232212",
                "installment_status": "WATING_REPAY",
                "installment_desc": "待还款",
                "installment_date": "2016-09-11 12:00:00"
            },
            {
                "installment_id": "201609232213",
                "installment_status": "OVERDUE",
                "installment_desc": "已逾期7天",
                "installment_date": "2016-09-11 12:00:00"
            }
        ]
    },
    {
        "repayment_id": "201609237774",
        "installments": [
            {
                "installment_id": "201609232215",
                "installment_status": "CONFIRM_COMPLETE",
                "installment_desc": "已销账",
                "installment_date": "2016-09-11 12:00:00"
            }
        ]
    }
]
	 **/
	private $repayments;

	private $apiParas = array();
	private $fileParas = array();
	private $apiVersion="1.0";
	private $scene;
	private $channel;
	private $platform;
	private $extParams;

	
	public function setCertNo($certNo)
	{
		$this->certNo = $certNo;
		$this->apiParas["cert_no"] = $certNo;
	}

	public function getCertNo()
	{
		return $this->certNo;
	}

	public function setCertType($certType)
	{
		$this->certType = $certType;
		$this->apiParas["cert_type"] = $certType;
	}

	public function getCertType()
	{
		return $this->certType;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setRepayments($repayments)
	{
		$this->repayments = $repayments;
		$this->apiParas["repayments"] = $repayments;
	}

	public function getRepayments()
	{
		return $this->repayments;
	}

	public function getApiMethodName()
	{
		return "zhima.customer.performance.feedback";
	}

	public function setScene($scene)
	{
		$this->scene=$scene;
	}

	public function getScene()
	{
		return $this->scene;
	}
	
	public function setChannel($channel)
	{
		$this->channel=$channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}
	
	public function setPlatform($platform)
	{
		$this->platform=$platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function setExtParams($extParams)
	{
		$this->extParams=$extParams;
	}

	public function getExtParams()
	{
		return $this->extParams;
	}	

	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function getFileParas()
	{
		return $this->fileParas;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

}
