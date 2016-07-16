#include <bits/stdc++.h>
using namespace std;
void f(string s)
{
	int n = (int)s.size();
	int idx = 0, cnt = 0;
	while ( idx < n && s[idx] != '$' ) idx++;
	cout << '$';
	idx++;
	string p = "";
	while ( idx < n && (s[idx] == '0' || s[idx] == ' ') ) idx++;
	while ( idx < n && (s[idx] == ' ' || (s[idx] >= '0' && s[idx] <= '9') ) ) {
		if ( s[idx] != ' ' ) cout << s[idx], cnt++;
		idx++;
	}
	if ( cnt == 0 ) cout << '0';
	cout << endl;
	return;
}
int main()
{
	int t, n, idx;
	string s;
	bool flag = false;
	
	cin >> t;
	getchar();
	assert(t >= 1 && t <= 500);
	while ( t-- ) {
		getline(cin, s);
		n = (int)s.size();
		assert(n >= 2 && n <= 1000);
		f(s);
	}
	return 0;
}