#include <stdio.h>
#include <stdlib.h>

typedef struct node
{
    int data;
    int pos;
    struct node *left, *right;
} Node;

struct node *lowestCA(struct node *root, int n1, int n2)
{
    if (root == NULL)
        return NULL;

    if (root->data > n1 && root->data > n2)
        return lowestCA(root->left, n1, n2);

    if (root->data < n1 && root->data < n2)
        return lowestCA(root->right, n1, n2);

    return root;
}

struct node *newNode(int data, int position)
{
    struct node *node = (struct node *)malloc(sizeof(struct node));
    node->data = data;
    node->left = node->right = NULL;
    node->pos = position;
    return (node);
}

int main()
{
    int n, q, val;
    scanf("%d%d", &n, &q);
    Node *a[n];
    int ans[n];

    for (int i = 0; i < n; i++)
    {
        scanf("%d", &val);
        a[i] = newNode(val, i);
    }

    for (int i = 0; i < n - 1; i++)
    {
        int p, c;
        char dir;

        scanf("%d%d %c", &p, &c, &dir);

        if (dir == 'L')
            a[p]->left = a[c];
        else
            a[p]->right = a[c];
    }

    for (int i = 0; i < q; i++)
    {
        int p1, p2, dat1, dat2;
        Node *lca;
        scanf("%d%d", &p1, &p2);

        dat1 = a[p1]->data;
        dat2 = a[p2]->data;
        lca = lowestCA(a[0], dat1, dat2);

        ans[i] = lca->pos;
    }

    for (int i = 0; i < q - 1; i++)
        printf("%d ", ans[i]);

    printf("%d ", ans[q - 1]);
    return 0;
}
