1. [1 Mark] Projection query: Create one query of this category and provide an interface
for the user to specify the projection conditions to be returned.
Example:
SELECT Field_01
FROM Table_01

  * Shown on site page: missions
  * Query Used in Project: "select mission.name, boss.name as bname $target_var $description_var from mission left join mission_description on mission.target=mission_description.target left join boss on mission.boss=boss.id order by mission.name"
  * Used in php file: resources/php/mission_display.php
  * On line number: 14
  * Users restriction: villain only


2. [1 Mark] Selection query : Create one query of this category and provide an interface
for the user to specify the selection conditions to be returned. Example:
SELECT Field_01
FROM Table_01
WHERE Field_02 >= 0

  * Shown on site page: Minion
  * Query Used in Project: select id from minion where grade="$grade";
  * Used in php file: resources/php/filter_grade.php
  * On line number: 14
  * Users restriction: boss, villain


3. [1 Mark] Join query: Pick one query of this category, which joins at least two tables and
performs a meaningful query, and provide an interface for the user to choose this query
(e.g. join the Customers and the Transactions table to find the phone numbers of all
customers who has purchased a specific item).

  * Shown on site page: missions
  * Query Used in Project: "select mission.name, boss.name as bname $target_var $description_var from mission left join mission_description on mission.target=mission_description.target left join boss on mission.boss=boss.id order by mission.name"
  * Used in php file: resources/php/mission_display.php
  * On line number: 14
  * Users restriction: villain only


4. [2 Mark] Division query: Pick one query of this category and provide an interface for
the user to choose this query (e.g. find all the customers who bought all the items).

  * Shown on site page: mission.php
  * Query Used in Project: "select name, id from boss b where not exists (select m.name, m.boss from mission m
    where not exists (select boss from mission m2 where b.id=m2.boss and m.name=m2.name))"
  * Used in php file: resources/php/boss_mission_div.php
  * On line number: 
  * Users restriction: villain


5. [2 Mark] Aggregation query: Pick two queries that require the use of distinct
aggregation (min, max, average, or count are all fine).

  * Shown on site page: minions.php
  * Query Used in Project: "select count(\*) as count from minions"
  * Used in php file: resources/php/minion_count.php
  * On line number: 9
  * Users restriction: villain,boss

  * Shown on site page: boss.php
  * Query Used in Project: "select average(\*) as avg from boss where id <>
    $ident"
  * Used in php file: resources/php/avg_boss_rating.php
  * On line number: 9
  * Users restriction: villain

6. [1 Mark] Nested aggregation with group-by: Pick one query that finds some
aggregated value for each group (e.g. the average number of items purchased per
customer).

  * Shown on site page: Minions page using "Class Average" button
  * Query Used in Project: "select advanced.class, avg(result.ability_rating) as average_ability from minion, advanced, (select id, ability_rating from spy union select id, ability_rating from tech union select id, ability_rating from muscle) as result where minion.id=result.id and minion.class=advanced.rank group by minion.class"
  * Used in php file: resources/php/avg_class_rating.php
  * On line number: 10
  * Users restriction: villain only


7. [1 Marks] Delete operation: Implement a cascade-on-delete situation. Provide an
interface for the user to specify some input for the deletion operation. Based on input,
deletion should be performed.

  * Shown on site page: Bases click on red trash can beside each row
  * Query Used in Project: "delete from base where id='$id'"
  * Used in php file: resources/php/base_edit.php
  * On line number: 39
  * Users restriction: villain only


8. [1 Marks] Update Operation: Provide an interface for the user to specify some input
for the update operation.

  * Shown on site page: profile.php
  * Query Used in Project: "update users set passwd='$hash' where id='$id'";
  * Used in php file: resources/php/update_pass.php
  * On line number: 24
  * Users restriction: none


9. [3 Bonus Marks] Extra features: Create unique features that your application
supports. Some examples are using Bootstrap, implementing Triggers and Privileges in
the database.

  * Triggers in villaindb.create.sql
  * Different levels of user privilege: villain, boss and minions
  * Used bootstrap for UI
