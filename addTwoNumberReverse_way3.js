/**
 * Definition for singly-linked list.
 * function ListNode(val) {
 *     this.val = val;
 *     this.next = null;
 * }
 */

var addTwoNumbers = function(l1, l2) {
    let node = new ListNode(0);
    let root = node;
    var carry = 0, value = 0;
    while(l1 !== null || l2 !== null || carry > 0){
        let val1 = (l1 === null) ? 0 : l1.val;
        let val2 = (l2 === null) ? 0 : l2.val;
        value = val1 + val2 + carry;
        carry = Math.floor(value / 10);
        node.next = new ListNode(value % 10);
        if(l1 != null){
            l1 = l1.next;   
        }
        if(l2 != null){
            l2 = l2.next;
        }
        node = node.next;
    }
    return root.next;
};