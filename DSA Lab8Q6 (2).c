#include <stdio.h>
#include <stdlib.h>

struct node
{
    int data;
    struct node *left;
    struct node *right;
};

struct node *newNode(int d)
{
    struct node *temp = malloc(sizeof(struct node *));
    temp->data = d;
    temp->left = NULL;
    temp->right = NULL;

    return temp;
}

struct node *search(struct node *root, int x)
{
    if (!root)
        return NULL;

    if (root->data == x)
        return root;

    struct node *l = search(root->left, x);
    struct node *r = search(root->right, x);

    if (l)
        return l;

    else
        return r;
}

struct node *lca(struct node *root, int n1, int n2)
{
    if (root == NULL)
        return NULL;

    if (root->data > n1 && root->data > n2)
        return lca(root->left, n1, n2);

    if (root->data < n1 && root->data < n2)
        return lca(root->right, n1, n2);

    return root;
}

int main()
{
    int n, q;
    scanf("%d %d", &n, &q);

    int a[n];
    for (int i = 0; i < n; i++)
        scanf("%d ", &a[i]);

    struct node *root = newNode(a[0]);

    int x, y;
    char ch;
    for (int i = 0; i < n - 1; i++)
    {
        scanf("%d %d ", &x, &y);
        scanf("%c", &ch);

        struct node *parent = search(root, a[x]);

        if (ch == 'L')
            parent->left = newNode(a[y]);

        else
            parent->right = newNode(a[y]);
    }

    for (int i = 0; i < q; i++)
    {
        int n1, n2;
        scanf("%d%d", &n1, &n2);
        struct node *node1 = search(root, a[n1]);
        struct node *node2 = search(root, a[n2]);
        struct node *temp = lca(root, node1->data, node2->data);

        for (int i = 0; i < n; i++)
        {
            if (temp->data == a[i])
                printf("%d ", i);
        }
    }

    return 0;
}