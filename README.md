# TruthUncover
Reasoning platform

- A **claim** has many solutions.
- A **claim** has many contradictions.
- Each of solutions and contradictions has a connection with the claim that can be scored as effect.
---
- A **solution**/**contradiction** consists of many claims inside it with additional fields for reasoning and evidence.
---
- A **claim** can be a principle (100% correct) or can be partial correct based on these rules:
  - Sum of all connections is 1.
  - sc = correctness of the solution.
  - sc_conn = effect of the solution on the claim.
  - cc = correctness of the contradiction.
  - cc_conn = effect of the contradiction on the claim.
  - A claim total correctness is `sc1*sc_conn1 + sc2*sc_conn2 + ... - cc1*cc_conn1 - cc2*cc_conn2 - ... ` minimum 0 and maximum 100
