<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee", indexes={@ORM\Index(name="fk_Employee_Account1_idx", columns={"account_ID"})})
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="position_title", type="string", length=45, nullable=false)
     */
    private $positionTitle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_permanent", type="boolean", nullable=true)
     */
    private $isPermanent;

    /**
     * @var string
     *
     * @ORM\Column(name="salary_grade", type="string", length=45, nullable=true)
     */
    private $salaryGrade;

    /**
     * @var string
     *
     * @ORM\Column(name="TIN", type="string", length=45, nullable=true)
     */
    private $tin;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=255, nullable=true)
     */
    private $bankName;

    /**
     * @var integer
     *
     * @ORM\Column(name="bank_account_number", type="integer", nullable=true)
     */
    private $bankAccountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="annual_salary", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $annualSalary;

    /**
     * @var string
     *
     * @ORM\Column(name="company_college", type="string", length=255, nullable=true)
     */
    private $companyCollege;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_university_employee", type="boolean", nullable=false)
     */
    private $isUniversityEmployee;

    /**
     * @var integer
     *
     * @ORM\Column(name="employment_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $employmentId;

    /**
     * @var \Acme\HelloBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="Acme\HelloBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_ID", referencedColumnName="account_ID")
     * })
     */
    private $account;



    /**
     * Set type
     *
     * @param string $type
     * @return Employee
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set positionTitle
     *
     * @param string $positionTitle
     * @return Employee
     */
    public function setPositionTitle($positionTitle)
    {
        $this->positionTitle = $positionTitle;

        return $this;
    }

    /**
     * Get positionTitle
     *
     * @return string 
     */
    public function getPositionTitle()
    {
        return $this->positionTitle;
    }

    /**
     * Set isPermanent
     *
     * @param boolean $isPermanent
     * @return Employee
     */
    public function setIsPermanent($isPermanent)
    {
        $this->isPermanent = $isPermanent;

        return $this;
    }

    /**
     * Get isPermanent
     *
     * @return boolean 
     */
    public function getIsPermanent()
    {
        return $this->isPermanent;
    }

    /**
     * Set salaryGrade
     *
     * @param string $salaryGrade
     * @return Employee
     */
    public function setSalaryGrade($salaryGrade)
    {
        $this->salaryGrade = $salaryGrade;

        return $this;
    }

    /**
     * Get salaryGrade
     *
     * @return string 
     */
    public function getSalaryGrade()
    {
        return $this->salaryGrade;
    }

    /**
     * Set tin
     *
     * @param string $tin
     * @return Employee
     */
    public function setTin($tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * Get tin
     *
     * @return string 
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     * @return Employee
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string 
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set bankAccountNumber
     *
     * @param integer $bankAccountNumber
     * @return Employee
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    /**
     * Get bankAccountNumber
     *
     * @return integer 
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Set annualSalary
     *
     * @param string $annualSalary
     * @return Employee
     */
    public function setAnnualSalary($annualSalary)
    {
        $this->annualSalary = $annualSalary;

        return $this;
    }

    /**
     * Get annualSalary
     *
     * @return string 
     */
    public function getAnnualSalary()
    {
        return $this->annualSalary;
    }

    /**
     * Set companyCollege
     *
     * @param string $companyCollege
     * @return Employee
     */
    public function setCompanyCollege($companyCollege)
    {
        $this->companyCollege = $companyCollege;

        return $this;
    }

    /**
     * Get companyCollege
     *
     * @return string 
     */
    public function getCompanyCollege()
    {
        return $this->companyCollege;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Employee
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Employee
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set isUniversityEmployee
     *
     * @param boolean $isUniversityEmployee
     * @return Employee
     */
    public function setIsUniversityEmployee($isUniversityEmployee)
    {
        $this->isUniversityEmployee = $isUniversityEmployee;

        return $this;
    }

    /**
     * Get isUniversityEmployee
     *
     * @return boolean 
     */
    public function getIsUniversityEmployee()
    {
        return $this->isUniversityEmployee;
    }

    /**
     * Get employmentId
     *
     * @return integer 
     */
    public function getEmploymentId()
    {
        return $this->employmentId;
    }

    /**
     * Set account
     *
     * @param \Acme\HelloBundle\Entity\Account $account
     * @return Employee
     */
    public function setAccount(\Acme\HelloBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Acme\HelloBundle\Entity\Account 
     */
    public function getAccount()
    {
        return $this->account;
    }
}
