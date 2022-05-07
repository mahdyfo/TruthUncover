# TruthUncover
Reasoning platform

Every claim has reasons supporting or opposing it. Everyday we encounter many claims and we judge the truth of them by the reasons that we have in mind. Many times it gets difficult to calculate all of them without writing them down. Here we make a reasoning system to find the truth behind everything. Or at least the percentage of the truth.

- A **claim** has many support reasons.
- A **claim** has many oppose reasons.
- Each of reasons has a connection to the claim that can be scored as effect.
- **APT** = Agree votes Per Total. Each connection has an APT value.
- Sum of all connections is 1.
- Each **connection effect** = APT of the connection / sum of APT of all connections to the claim.
- **Truth** percecntage of a claim = Sigma(support connection effect * truth rate of the support reason)
---
- A **solution**/**approach** consists of many claims inside it with additional fields for comments.
---
- Correctness of a **claim** is sum of its supports percentages:
  - A user can say Yes or No to the validity of connections.
  - The last bottom claim's truth is 100%.
  - A user can see comments for each connection when they want to vote.
  - Comments can be liked or disliked and are sorted by the likes value.
  - There is a survey for each claim, asking Yes or No for connections.
  - Upper level connections are calculated based on lower ones.
  - A user can add new support or oppose reasons to each claim.
  - Reasons with a lot of Noes will be archived (e.g. <4% APT). It means they do not effect the truth calculation and also are not shown.
  - New reasons are not taken into effect until they get an specific number of votes e.g. 100.
  - Users can report a reason as duplicate. Highly reported duplicated reasons will be archived.
  - Users can report a reason as ambiguous. Highly reported ambiguous reasons will be archived until author clarifies it more.

There is an example for recent world event (All numbers are just examples):

Example 1:

    If reason 3 is 100% true and it opposes 60% to reason 2,
    And if reason 2 opposes 10% to reason 1,
    How much is the truth of reason 1?
    
                                 Reason 1
                                    |
                                    | oppose 10%
                                    |
                                 Reason 2
                                    |
                                    | oppose 60%
                                    |
                                 Reason 3 (100% true)
                                 
    Reason 2 truth = 100% - (Reason 3 truth * Reason 3 effect) = 100% - (100% * 60%) = 40% -> we applied 100% - because it
    is oppose and we don't have support reasons. but there can be support reasons which are not yet discovered. Same applies
    to a claim with only support reasons.
    
    Reason 1 truth = 100% - (Reason 2 truth * Reason 2 effect) = 100% - (40% * 10%) = 96%
    
    Reason 1 is 96% true.

Example 2:

                                 Reason 1
                                    |
                                    | oppose (APT=10%)
                                    |
                                 Reason 2
             /                      |                     \
           / oppose (APT=60%)       | support (APT=80%)     \ support (APT=40%)
         /                          |                         \
    Reason 3 (100% true)        Reason 4 (100% true)                Reason 5 (100% true)

    Truth of Reason 1 = 100% - (Reason 2 effect (10%) * Reason 2 truth)

    Effect of Reason 3 = APT / total APT = 60% / (60% + 80% + 40%) = 33%
    Effect of Reason 4 = 80% / (60% + 80% + 40%) = 45%
    Effect of Reason 5 = 40% / (60% + 80% + 40%) = 22%

    Truth of Reason 2 = (Reason 4 effect * Reason 4 truth) + (Reason 5 effect * Reason 5 truth) = (45% * 100%) + (22% * 100%) = 67%

    Effect of Reason 2 = APT / total APT = 10% / 100% = 10% -> We assume total apt to be 100%, we suppose there
    are other support reasons which are not discovered yet

    Truth of Reason 1 = 100% - (Reason 2 truth * Reason 2 effect) = 100% - (67% * 10%) = 93.3%
