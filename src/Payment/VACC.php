<?php
/**
 * Part of spgateway project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Asika\Spgateway\Payment;

use Asika\Spgateway\Payment\AbstractPayment;

/**
 * The VACC payment.
 *
 * @since  {DEPLOY_VERSION}
 */
class VACC extends AbstractPayment
{
	/**
	 * Property laterPayment.
	 *
	 * @var  boolean
	 */
	protected $deferralPayment = true;

	/**
	 * Property data.
	 *
	 * @var  array
	 */
	protected $data = array(
		'VACC' => null
	);

	/**
	 * getName
	 *
	 * @return  string
	 */
	public function getName()
	{
		return 'VACC';
	}
}
