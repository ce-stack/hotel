<?php

class CancelPolicies
{

    /**
     * @var \DateTime $LastCancellationDeadline
     */
    protected $LastCancellationDeadline = null;

    /**
     * @var CancelPolicy[] $CancelPolicy
     */
    protected $CancelPolicy = null;

    /**
     * @var string[] $TextPolicy
     */
    protected $TextPolicy = null;

    /**
     * @var CancelPolicy[] $NoShowPolicy
     */
    protected $NoShowPolicy = null;

    /**
     * @var string $DefaultPolicy
     */
    protected $DefaultPolicy = null;

    /**
     * @var string $AutoCancellationText
     */
    protected $AutoCancellationText = null;

    /**
     * @var PolicyFormat $PolicyFormat
     */
    protected $PolicyFormat = null;

    /**
     * @param PolicyFormat $PolicyFormat
     */
    public function __construct($PolicyFormat)
    {
      $this->PolicyFormat = $PolicyFormat;
    }

    /**
     * @return \DateTime
     */
    public function getLastCancellationDeadline()
    {
      if ($this->LastCancellationDeadline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastCancellationDeadline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastCancellationDeadline
     * @return CancelPolicies
     */
    public function setLastCancellationDeadline(\DateTime $LastCancellationDeadline = null)
    {
      if ($LastCancellationDeadline == null) {
       $this->LastCancellationDeadline = null;
      } else {
        $this->LastCancellationDeadline = $LastCancellationDeadline->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return CancelPolicy[]
     */
    public function getCancelPolicy()
    {
      return $this->CancelPolicy;
    }

    /**
     * @param CancelPolicy[] $CancelPolicy
     * @return CancelPolicies
     */
    public function setCancelPolicy(array $CancelPolicy = null)
    {
      $this->CancelPolicy = $CancelPolicy;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getTextPolicy()
    {
      return $this->TextPolicy;
    }

    /**
     * @param string[] $TextPolicy
     * @return CancelPolicies
     */
    public function setTextPolicy(array $TextPolicy = null)
    {
      $this->TextPolicy = $TextPolicy;
      return $this;
    }

    /**
     * @return CancelPolicy[]
     */
    public function getNoShowPolicy()
    {
      return $this->NoShowPolicy;
    }

    /**
     * @param CancelPolicy[] $NoShowPolicy
     * @return CancelPolicies
     */
    public function setNoShowPolicy(array $NoShowPolicy = null)
    {
      $this->NoShowPolicy = $NoShowPolicy;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPolicy()
    {
      return $this->DefaultPolicy;
    }

    /**
     * @param string $DefaultPolicy
     * @return CancelPolicies
     */
    public function setDefaultPolicy($DefaultPolicy)
    {
      $this->DefaultPolicy = $DefaultPolicy;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutoCancellationText()
    {
      return $this->AutoCancellationText;
    }

    /**
     * @param string $AutoCancellationText
     * @return CancelPolicies
     */
    public function setAutoCancellationText($AutoCancellationText)
    {
      $this->AutoCancellationText = $AutoCancellationText;
      return $this;
    }

    /**
     * @return PolicyFormat
     */
    public function getPolicyFormat()
    {
      return $this->PolicyFormat;
    }

    /**
     * @param PolicyFormat $PolicyFormat
     * @return CancelPolicies
     */
    public function setPolicyFormat($PolicyFormat)
    {
      $this->PolicyFormat = $PolicyFormat;
      return $this;
    }

}
