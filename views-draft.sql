CREATE VIEW total_extras AS
SELECT employee_id, SUM(amount) AS total_extra, month FROM `extras` GROUP BY employee_id, month

CREATE VIEW total_delaies AS
SELECT employee_id, SUM(delay_min) as total_delay, month
FROM attendance_lists 
GROUP BY employee_id, month

CREATE VIEW total_changes AS
SELECT employee_id, SUM(amount) AS total_change, month 
FROM salary_changes 
GROUP BY employee_id, month

SELECT * FROM employees LEFT JOIN total_changes ON (employees.id = total_changes.employee_id) WHERE total_changes.month = 5 OR total_changes.month IS null


SELECT employees.id, employees.name, employees.salary AS default_salary, total_changes.total_change, total_changes.month FROM employees LEFT JOIN total_changes ON (employees.id = total_changes.employee_id) WHERE total_changes.month = 5



SELECT MONTH(CURDATE())

ALTER TABLE attendance_lists 
ADD COLUMN month int GENERATED ALWAYS AS (MONTH(date))


SELECT * FROM employees 
LEFT JOIN total_changes ON (employees.id = total_changes.employee_id) 
WHERE month = MONTH(CURDATE())

CREATE VIEW delay_deductions AS 
SELECT * FROM salary_changes 
WHERE month = MONTH(CURDATE()) AND reason = 'delay deduction'


SELECT employees.*, total_changes.*, (SELECT SUM(amount) FROM salary_changes WHERE salary_changes.employee_id = employees.id AND salary_changes.status = 1) AS total_extra, (SELECT SUM(amount) FROM salary_changes WHERE salary_changes.employee_id = employees.id AND salary_changes.status = 0) AS total_deduction FROM employees LEFT JOIN total_changes ON (employees.id = total_changes.employee_id)
