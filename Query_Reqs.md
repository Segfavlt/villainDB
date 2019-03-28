1. [1 Mark] Projection query: Create one query of this category and provide an interface
for the user to specify the projection conditions to be returned.
Example:
SELECT Field_01
FROM Table_01

  * Shown on site page:
  * Query Used in Project:
  * Used in php file:
  * On line number:
  * Users restriction:


2. [1 Mark] Selection query : Create one query of this category and provide an interface
for the user to specify the selection conditions to be returned. Example:
SELECT Field_01
FROM Table_01
WHERE Field_02 >= 0

  * Shown on site page:
  * Query Used in Project:
  * Used in php file:
  * On line number:
  * Users restriction:


3. [1 Mark] Join query: Pick one query of this category, which joins at least two tables and
performs a meaningful query, and provide an interface for the user to choose this query
(e.g. join the Customers and the Transactions table to find the phone numbers of all
customers who has purchased a specific item).

  * Shown on site page:
  * Query Used in Project:
  * Used in php file:
  * On line number:
  * Users restriction:


4. [2 Mark] Division query: Pick one query of this category and provide an interface for
the user to choose this query (e.g. find all the customers who bought all the items).

  * Shown on site page:
  * Query Used in Project:
  * Used in php file:
  * On line number:
  * Users restriction:


5. [2 Mark] Aggregation query: Pick two queries that require the use of distinct
aggregation (min, max, average, or count are all fine).

  * Shown on site page:
  * Query Used in Project:
  * Used in php file:
  * On line number:
  * Users restriction:


6. [1 Mark] Nested aggregation with group-by: Pick one query that finds some
aggregated value for each group (e.g. the average number of items purchased per
customer).

  * Shown on site page: Minions page using "Class Average" button
  * Query Used in Project: "select advanced.class, avg(result.ability_rating) as average_ability from minion, advanced, (select id, ability_rating from spy union select id, ability_rating from tech union select id, ability_rating from muscle) as result where minion.id=result.id and minion.class=advanced.rank group by minion.class"
  * Used in php file: avg_class_rating.php
  * On line number: 10
  * Users restriction: villain only


7. [1 Marks] Delete operation: Implement a cascade-on-delete situation. Provide an
interface for the user to specify some input for the deletion operation. Based on input,
deletion should be performed.

  * Shown on site page: Bases click on red trash can beside each row
  * Query Used in Project: "delete from base where id='$id'"
  * Used in php file: base_edit.php
  * On line number: 39
  * Users restriction: villain only


8. [1 Marks] Update Operation: Provide an interface for the user to specify some input
for the update operation.

  * Shown on site page:
  * Query Used in Project:
  * Used in php file:
  * On line number:
  * Users restriction:


9. [3 Bonus Marks] Extra features: Create unique features that your application
supports. Some examples are using Bootstrap, implementing Triggers and Privileges in
the database.

  * Shown on site page:
  * Query Used in Project:
  * Used in php file:
  * On line number:
  * Users restriction: