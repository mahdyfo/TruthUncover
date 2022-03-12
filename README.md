# TruthUncover
Reasoning platform

- A **claim** has many support reasons.
- A **claim** has many oppose reasons.
- Each of reasons has a connection to the claim that can be scored as effect.
---
- A **solution**/**contradiction** consists of many claims inside it with additional fields for comments.
---
- Correctness of a **claim** is sum of its supports percentages:
  - Sum of all connections is 1.
  - A user can say Yes or No to the validity of bottom support or oppose connections.
  - A user can see comments for each connection.
  - Comments can be liked or disliked and are sorted by the likes value.
  - There is a survey for each high end claim, asking Yes or No for bottom level connections.
  - Upper level connections are calculated based on lower ones.
  - A user can add new support or oppose reasons to each claim.
  - Reasons with a lot of Noes will be archived. It means they do not effect the numbers and are not shown.
  - New reasons are not taken into effect until they reach an specific number of yes/no votes.
  - Users can report a reason as duplicate. Highly reported duplicated reasons will be archived.

There is an example for recent world event (All numbers are just examples):

![truchuncover-mechanism](README1.jpg)
