SELECT 
  first_name,
  last_name,
  dept_name,
  DATEDIFF(from_date,to_date) as total_dias  
FROM 
   employees,
   departments,
	dept_emp 

WHERE
  employees.emp_no IN (dept_emp.emp_no)
AND
  departments.dept_no IN (dept_emp.dept_no)
 ORDER  BY total_dias ASC LIMIT 10;
  