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


CREATE VIEW salary_changes_emp AS
SELECT salary_changes.id AS change_id, salary_changes.employee_id, employees.name,  employees.avatar, salary_changes.amount
, salary_changes.reason, salary_changes.date, salary_changes.month, salary_changes.status
FROM employees JOIN salary_changes ON (employees.id = salary_changes.employee_id) 


SELECT 
employees.id AS employee_id, 
employees.avatar,
employees.name,
employees.position,
employees.salary AS main_salary,
(SELECT SUM(amount) FROM salary_changes WHERE salary_changes.employee_id = employees.id AND salary_changes.status = 1) AS total_extra,
(SELECT SUM(amount) FROM salary_changes WHERE salary_changes.employee_id = employees.id AND salary_changes.status = 0) AS total_deduction
FROM employees, financial_operations
WHERE employees.name = financial_operations.client 
AND financial_operations.status = 0
AND financial_operations.reason = 'salary'
AND financial_operations.month = (SELECT MONTH(CURDATE()))



CREATE VIEW salaries AS
SELECT 
employees.id AS employee_id, 
employees.avatar,
employees.name,
employees.position,
employees.salary AS main_salary,
(SELECT SUM(amount) FROM salary_changes WHERE salary_changes.employee_id = employees.id AND salary_changes.status = 1) AS total_extra,
(SELECT SUM(amount) FROM salary_changes WHERE salary_changes.employee_id = employees.id AND salary_changes.status = 0) AS total_deduction
FROM employees
WHERE employees.id NOT IN (SELECT salaries_received.employee_id FROM salaries_received WHERE salaries_received.month = (SELECT MONTH(CURDATE())))



CREATE VIEW sessions AS
SELECT  
individual_sessions.id AS session_id,
individual_sessions.amount, 
individual_sessions.remaining,
individual_sessions.date, 
individual_sessions.month,
children_id, childrens.child_name,
employee_id, employees.name AS emp_name
FROM `individual_sessions`
JOIN childrens ON (childrens.id = children_id) 
JOIN employees ON (employees.id = employee_id)



CREATE VIEW delaies AS
SELECT 
employees.id AS employee_id, 
employees.avatar,
employees.name,
employees.day_price,
total_delaies.total_delay,
total_delaies.month
FROM employees
JOIN total_delaies ON (employees.id = total_delaies.employee_id)
WHERE total_delaies.total_delay != 0 
AND employees.id NOT IN (SELECT delay_deductions.employee_id FROM delay_deductions WHERE delay_deductions.month = (SELECT MONTH(CURDATE())))


SELECT * FROM `employees` WHERE id NOT IN (SELECT employee_id FROM `attendance_lists` WHERE DATE(date) = CURDATE())


$dayofweek = date('D', strtotime('2021/10/03'));
$dayofweek = date('l', strtotime('2021/10/03'));


CREATE VIEW absences AS
SELECT 
employees.id AS employee_id, 
employees.avatar,
employees.name,
employees.day_price,
employees.salary,
attendance_lists.date,
attendance_lists.month,
attendance_lists.day,
attendance_lists.time
FROM employees
JOIN attendance_lists ON (employees.id = employee_id) 
WHERE is_attende = 0 
AND month = MONTH(CURDATE())
AND employee_id NOT IN (SELECT employee_id FROM absences_deductions WHERE date = DATE(attendance_lists.date))

CREATE VIEW absences AS
SELECT 
employees.id AS employee_id, 
employees.avatar,
employees.name,
employees.day_price,
employees.salary,
DATE(attendance_lists.date) AS date,
attendance_lists.month,
attendance_lists.time
FROM employees
JOIN attendance_lists ON (employees.id = employee_id) 
WHERE is_attende = 0 
AND month = MONTH(CURDATE())
AND employee_id NOT IN (SELECT employee_id FROM absences_deductions WHERE date = DATE(attendance_lists.date))


CREATE VIEW absences AS
SELECT 
employees.id AS employee_id, 
employees.avatar,
employees.name,
employees.position,
employees.day_price,
employees.salary,
DATE(attendance_lists.date) AS date,
attendance_lists.month,
attendance_lists.time
FROM employees
JOIN attendance_lists ON (employees.id = employee_id) 
WHERE is_attende = 0 
AND employee_id NOT IN (SELECT employee_id FROM absences_deductions WHERE date = DATE(attendance_lists.date))

SELECT
    `harvest_financial`.`employees`.`id` AS `employee_id`,
    `harvest_financial`.`employees`.`avatar` AS `avatar`,
    `harvest_financial`.`employees`.`name` AS `name`,
    `harvest_financial`.`employees`.`position` AS `position`,
    `harvest_financial`.`employees`.`day_price` AS `day_price`,
    `harvest_financial`.`employees`.`salary` AS `salary`,
    CAST(
        `harvest_financial`.`attendance_lists`.`date` AS DATE
    ) AS `date`,
    `harvest_financial`.`attendance_lists`.`month` AS `month`,
    `harvest_financial`.`attendance_lists`.`time` AS `time`
FROM
    (
        `harvest_financial`.`employees`
    JOIN `harvest_financial`.`attendance_lists` ON
        (
            `harvest_financial`.`employees`.`id` = `harvest_financial`.`attendance_lists`.`employee_id`
        )
    )
WHERE
    `harvest_financial`.`attendance_lists`.`is_attende` = 0 AND `harvest_financial`.`attendance_lists`.`month` = MONTH(CURDATE()) AND !(
        `harvest_financial`.`attendance_lists`.`employee_id` IN(
        SELECT
            `harvest_financial`.`absences_deductions`.`employee_id`
        FROM
            `harvest_financial`.`absences_deductions`
        WHERE
            `harvest_financial`.`absences_deductions`.`date` = CAST(
                `harvest_financial`.`attendance_lists`.`date` AS DATE
            )
    )
    )

CREATE VIEW financial_operation_archives AS
SELECT 
month AS final_month, 
SUM(amount) AS total_export,
(SELECT SUM(amount) FROM `financial_operations` WHERE status = 1 AND month = final_month) AS total_import 
FROM `financial_operations` 
WHERE status = 0 GROUP BY month
HAVING month != MONTH(CURDATE())

SELECT SUM(amount) AS total_export FROM `financial_operations` WHERE status = 0 AND month = 1;

SELECT SUM(amount) AS total_import FROM `financial_operations` WHERE status = 1 AND month = 1;

SELECT DISTINCT month FROM `financial_operations`;
