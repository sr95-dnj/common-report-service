<?php

namespace App\Http\Resources;

use App\Models\Payroll\EmployeeLoan;
use App\Models\Payroll\SalaryProcess;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\HR\Employee;

class SalaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'employee' => Employee::with([
                'branch' => function ($query) {
                    $query->join('branches', 'employee_postings.branch_id', '=', 'branches.id');
                    $query->where('is_continue', 1)->get();
                },
                'designation'
            ])->find($this->employee_id),
            'process' => SalaryProcess::find($this->salary_process_id),
            'basic' => $this->basic,
            'house_rent' => $this->house_rent,
            'medical' => $this->medical,
            'conveyance' => $this->conveyance,
            'tiffin' => $this->tiffin,
            'education' => $this->education,
            'washing' => $this->washing,
            'total_salary' => $this->total_salary,
            'income_tax' => $this->income_tax,
            'loan_interest' => $this->loan_interest,
            'vehicle_fee' => $this->vehicle_fee,
            'wasa_charge' => $this->wasa_charge,
            'municipal_tax' => $this->municipal_tax,
            'pf' => $this->pf,
            'pf_advance_return' => $this->pf_advance_return,
            'titas_gas' => $this->titas_gas,
            'staff_welfare_fund' => $this->staff_welfare_fund,
            'staff_insurance_fund' => $this->staff_insurance_fund,
            'total_deduction' => $this->total_deduction,
            'house_loan' => EmployeeLoan::where('loan_id', 1)->where('employee_id', $this->employee_id)->first(),
            'vehicle_loan' => EmployeeLoan::where('loan_id', 2)->where('employee_id', $this->employee_id)->first(),
            'computer_loan' => EmployeeLoan::where('loan_id', 3)->where('employee_id', $this->employee_id)->first(),
            'pf_loan' => EmployeeLoan::where('loan_id', 4)->where('employee_id', $this->employee_id)->first(),
        ];
    }
}
